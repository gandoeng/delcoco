<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class section_item extends CI_Controller
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

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/section_item_add', $arr_data);
	}

	public function edit($section_item_id)
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$section_item = $this->core_model->get('section_item', $section_item_id);

		$this->db->where('section_item_id', $section_item_id);
		$arr_image = $this->core_model->get('image');

		$section_item->image_name = '';

		if (count($arr_image) > 0)
		{
			$section_item->image_name = ($arr_image[0]->name != '') ? $arr_image[0]->name : $arr_image[0]->id . '.' . $arr_image[0]->ext;
		}

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['user'] = $this->_user;
		$arr_data['section_item'] = $section_item;

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/section_item_edit', $arr_data);
	}

	public function view($section_id)
	{
		$now = date('Y-m-d', mktime(0, 0, 0));
		$arr_data['page'] = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		$limit = $this->_setting->setting__limit_page;

		$this->load->library('pagination');

		$config = array();
        $config['base_url'] = base_url() . 'admin/section_item/view/' . $section_id . '/';

		$this->db->where('section_id', $section_id);
		$config['total_rows'] = $this->core_model->count('section_item');

		$config['per_page'] = $limit;
        $config['uri_segment'] = 5;
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

		$this->db->where('section_id', $section_id);
		$this->db->limit($limit, $arr_data['page']);
		$this->db->order_by('id');
		$arr_section_item = $this->core_model->get('section_item');

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['arr_section_item'] = $arr_section_item;
		$arr_data['user'] = $this->_user;
		$arr_data['pagination'] = $this->pagination->create_links();

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/section_item', $arr_data);
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

			$section_item_record = array();

			foreach ($_POST as $k => $v)
			{
				$section_item_record[$k] = $v;
			}

			$section_item_id = $this->core_model->insert('section_item', $section_item_record);

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

	public function ajax_delete($section_item_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$this->core_model->delete('section_item', $section_item_id);

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

	public function ajax_edit($section_item_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$section_item_record = array();
			$image_id = 0;

			foreach ($_POST as $k => $v)
			{
				if ($k == 'image_id')
				{
					$image_id = $v;
				}
				else
				{
					$section_item_record[$k] = $v;
				}
			}

			$this->core_model->update('section_item', $section_item_id, $section_item_record);

			if ($image_id > 0)
			{
				$this->db->where('section_item_id', $section_item_id);
				$this->core_model->update('image', 0, array('section_item_id' => 0));

				$this->core_model->update('image', $image_id, array('section_item_id' => $section_item_id));
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
}
