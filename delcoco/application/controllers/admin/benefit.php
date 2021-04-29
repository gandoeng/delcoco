<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Benefit extends CI_Controller
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
		$this->load->view('admin/benefit_add', $arr_data);
	}

	public function edit($benefit_id)
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$benefit = $this->core_model->get('benefit', $benefit_id);

		$this->db->where('benefit_id', $benefit_id);
		$arr_image = $this->core_model->get('image');

		$benefit->image_name = '';
		$benefit->image_thumbnail_name = '';
		$benefit->image_id = '';
		$benefit->image_thumbnail_id = '';

		if (count($arr_image) > 0)
		{
			foreach ($arr_image as $image)
			{
				if ($image->type == 'Thumbnail')
				{
					$benefit->image_thumbnail_name = ($image->name != '') ? $image->name : $image->id . '.' . $image->ext;
					$benefit->image_thumbnail_id = $image->id;
				}
				else
				{
					$benefit->image_name = ($image->name != '') ? $image->name : $image->id . '.' . $image->ext;
					$benefit->image_id = $image->id;
				}
			}
		}

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['user'] = $this->_user;
		$arr_data['benefit'] = $benefit;

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/benefit_edit', $arr_data);
	}

	public function view()
	{
		$now = date('Y-m-d', mktime(0, 0, 0));
		$arr_data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$limit = $this->_setting->setting__limit_page;

		$this->load->library('pagination');

		$config = array();
        $config['base_url'] = base_url() . 'admin/benefit/view/';
		$config['total_rows'] = $this->core_model->count('benefit');
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
		$arr_benefit = $this->core_model->get('benefit');

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['arr_benefit'] = $arr_benefit;
		$arr_data['user'] = $this->_user;
		$arr_data['pagination'] = $this->pagination->create_links();

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/benefit', $arr_data);
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

			$benefit_record = array();
			$arr_image_id = array();

			foreach ($_POST as $k => $v)
			{
				if ($k == 'arr_image_id')
				{
					$arr_image_id = $v;
				}
				else
				{
					$benefit_record[$k] = $v;
				}
			}

			$benefit_id = $this->core_model->insert('benefit', $benefit_record);

			if (count($arr_image_id) > 0)
			{
				$this->core_model->update('image', $arr_image_id, array('benefit_id' => $benefit_id));
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

	public function ajax_delete($benefit_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$this->core_model->delete('benefit', $benefit_id);

			$this->db->where('benefit_id', $benefit_id);
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

	public function ajax_edit($benefit_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$benefit_record = array();
			$arr_image_id = array();

			foreach ($_POST as $k => $v)
			{
				if ($k == 'arr_image_id')
				{
					$arr_image_id = $v;
				}
				else
				{
					$benefit_record[$k] = $v;
				}
			}

			$this->core_model->update('benefit', $benefit_id, $benefit_record);

			if (count($arr_image_id) > 0)
			{
				$this->db->where('benefit_id', $benefit_id);
				$this->core_model->update('image', 0, array('benefit_id' => 0));

				$this->core_model->update('image', $arr_image_id, array('benefit_id' => $benefit_id));
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
