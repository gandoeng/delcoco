<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends CI_Controller
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




	public function edit($header_id)
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$header = $this->core_model->get('header', $header_id);

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['user'] = $this->_user;
		$arr_data['header'] = $header;

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/header_edit', $arr_data);
	}

	public function view()
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$this->db->select('id, name');
		$arr_header = $this->core_model->get('header');

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['arr_header'] = $arr_header;
		$arr_data['user'] = $this->_user;

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/header', $arr_data);
	}




	public function ajax_edit($header_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$header_record = array();

			foreach ($_POST as $k => $v)
			{
				$header_record[$k] = $v;
			}

			$this->_validate_edit($header_id, $header_record);

			$this->core_model->update('header', $header_id, $header_record);

			$this->db->trans_complete();
		}
		catch (Exception $e)
		{
			$json['message'] = $e->getMessage();
			$json['status'] = 'error';

			if ($json['message'] == '')
			{
				$json['message'] = 'Server error.';
			}
		}

		echo json_encode($json);
	}




	private function _validate_edit($header_id, $header_record)
	{
		$this->db->where('id', $header_id);
		$this->db->where('editable', 0);
		$count_user = $this->core_model->count('header');

		if ($count_user > 0)
		{
			throw new Exception('Data cannot be updated.');
		}

		$this->db->where('name', $header_record['name']);
		$this->db->where('id !=', $header_id);
		$count_user = $this->core_model->count('header');

		if ($count_user > 0)
		{
			throw new Exception('Name already registered in database');
		}
	}
}
