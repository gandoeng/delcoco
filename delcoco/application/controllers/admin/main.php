<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
	private $_setting;
	private $_user;

	public function __construct()
	{
		parent:: __construct();

		$user_id = $this->session->userdata('user_id');

		if ($user_id > 0)
		{
			$this->_setting = $this->setting_model->load();
			$this->_user = $this->core_model->get('user', $user_id);
		}
		else
		{
			redirect(base_url() . 'admin/login/');
		}
	}

	public function index()
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$count_product = $this->core_model->count('product');
		$count_recipe = $this->core_model->count('recipe');

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['user'] = $this->_user;
		$arr_data['count_product'] = $count_product;
		$arr_data['count_recipe'] = $count_recipe;

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/dashboard', $arr_data);
	}




	public function alter_index($database)
	{
		set_time_limit(0);

		$this->db->simple_query("USE `{$database}`");

		$query = $this->db->query('SHOW TABLES');

		foreach ($query->result_array() as $arr_table)
		{
			$table = $arr_table["Tables_in_{$database}"];

			$query2 = $this->db->query("SHOW INDEX FROM `{$table}`");

			$arr_old_index = array();

			foreach ($query2->result_array() as $arr_index)
			{
				if ($arr_index['Key_name'] == 'PRIMARY')
				{
					continue;
				}

				$arr_old_index[][$arr_index['Column_name']] = $arr_index['Key_name'];
			}

			$arr_field = $this->db->field_data($table);

			$arr_new_index = array();

			foreach ($arr_field as $field)
			{
				if (!(preg_match('/_id$/', $field->name) && $field->type == 'int' && $field->max_length == 10) && !(preg_match('/date$/', $field->name)) && $field->name != 'module_id')
				{
					continue;
				}

				$arr_new_index[] = $field->name;
			}

			foreach ($arr_new_index as $key => $new_index)
			{
				if (!(isset($arr_old_index[$key][$new_index]) && $arr_old_index[$key][$new_index] == $new_index))
				{
					break;
				}

				unset($arr_old_index[$key][$new_index]);
				unset($arr_new_index[$key]);
			}

			foreach ($arr_old_index as $old_index)
			{
				foreach ($old_index as $index)
				{
					$this->db->simple_query("ALTER TABLE `{$table}` DROP INDEX `{$index}`");
				}
			}

			foreach ($arr_new_index as $new_index)
			{
				$this->db->simple_query("ALTER TABLE `{$table}` ADD INDEX `{$new_index}` (`{$new_index}`)");
			}
		}
	}
}