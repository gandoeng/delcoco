<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipe extends CI_Controller
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




	public function add()
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['user'] = $this->_user;
		$arr_data['arr_category'] = $this->_get_category();

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/recipe_add', $arr_data);
	}

	public function edit($recipe_id)
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$recipe = $this->core_model->get('recipe', $recipe_id);

		$this->db->where('recipe_id', $recipe_id);
		$arr_image = $this->core_model->get('image');

		$recipe->image_name = '';

		if (count($arr_image) > 0)
		{
			$recipe->image_name = ($arr_image[0]->name != '') ? $arr_image[0]->name : $arr_image[0]->id . '.' . $arr_image[0]->ext;
		}

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['user'] = $this->_user;
		$arr_data['recipe'] = $recipe;
		$arr_data['arr_category'] = $this->_get_category();

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/recipe_edit', $arr_data);
	}

	public function view()
	{
		$now = date('Y-m-d', mktime(0, 0, 0));
		$arr_data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$limit = $this->_setting->setting__limit_page;

		$this->load->library('pagination');

		$config = array();
        $config['base_url'] = base_url() . 'admin/recipe/view/';
		$config['total_rows'] = $this->core_model->count('recipe');
        $config['per_page'] = $limit;
        $config['uri_segment'] = 4;
        $choice = $config["total_rows"] / $limit;
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

		$this->db->limit($limit, $arr_data['page']);
		$this->db->order_by('id');
		$arr_recipe = $this->core_model->get('recipe');
		$arr_recipe_id = $this->cms_function->extract_records($arr_recipe, 'id');

		$arr_recipe_image_lookup = array();

		if (count($arr_recipe_id) > 0)
		{
			$this->db->where_in('recipe_id', $arr_recipe_id);
			$arr_recipe_image = $this->core_model->get('image');

			foreach ($arr_recipe_image as $recipe_image)
			{
				$arr_recipe_image_lookup[$recipe_image->recipe_id] = ($recipe_image->name != '') ? $recipe_image->name : $recipe_image->id . '.' . $recipe_image->ext;
			}
		}

		foreach ($arr_recipe as $recipe)
		{
			$recipe->image_name = (isset($arr_recipe_image_lookup[$recipe->id])) ? $arr_recipe_image_lookup[$recipe->id] : '';
		}

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['arr_recipe'] = $arr_recipe;
		$arr_data['user'] = $this->_user;
		$arr_data['pagination'] = $this->pagination->create_links();

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/recipe', $arr_data);
	}




	public function ajax_add()
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$recipe_record = array();
			$image_id = 0;

			foreach ($_POST as $k => $v)
			{
				if ($k == 'image_id')
				{
					$image_id = $v;
				}
				else
				{
					$recipe_record[$k] = $v;
				}
			}

			$recipe_id = $this->core_model->insert('recipe', $recipe_record);

			if ($image_id > 0)
			{
				$this->core_model->update('image', $image_id, array('recipe_id' => $recipe_id));
			}

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

	public function ajax_delete($recipe_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$this->core_model->delete('recipe', $recipe_id);

			$this->db->where('recipe_id', $recipe_id);
			$this->core_model->delete('image');

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

	public function ajax_edit($recipe_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$recipe_record = array();
			$image_id = 0;

			foreach ($_POST as $k => $v)
			{
				if ($k == 'image_id')
				{
					$image_id = $v;
				}
				else
				{
					$recipe_record[$k] = $v;
				}
			}

			$this->core_model->update('recipe', $recipe_id, $recipe_record);

			if ($image_id > 0)
			{
				$this->db->where('recipe_id', $recipe_id);
				$this->core_model->update('image', 0, array('recipe_id' => 0));

				$this->core_model->update('image', $image_id, array('recipe_id' => $recipe_id));
			}

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




	private function _get_category()
	{
		$this->db->select('id, name');
		return $this->core_model->get('category');
	}
}
