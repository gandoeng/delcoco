<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slideshow extends CI_Controller
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
		$this->load->view('admin/slideshow_add', $arr_data);
	}

	public function edit($slideshow_id)
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$slideshow = $this->core_model->get('slideshow', $slideshow_id);

		$this->db->where('slideshow_id', $slideshow_id);
		$arr_image = $this->core_model->get('image');

		$slideshow->image_name = '';

		if (count($arr_image) > 0)
		{
			$slideshow->image_name = ($arr_image[0]->name != '') ? $arr_image[0]->name : $arr_image[0]->id . '.' . $arr_image[0]->ext;
		}

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['user'] = $this->_user;
		$arr_data['slideshow'] = $slideshow;

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/slideshow_edit', $arr_data);
	}

	public function view()
	{
		$now = date('Y-m-d', mktime(0, 0, 0));
		$arr_data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$limit = $this->_setting->setting__limit_page;

		$this->load->library('pagination');

		$config = array();
        $config['base_url'] = base_url() . 'admin/slideshow/view/';
		$config['total_rows'] = $this->core_model->count('slideshow');
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
		$arr_slideshow = $this->core_model->get('slideshow');
		$arr_slideshow_id = $this->cms_function->extract_records($arr_slideshow, 'id');

		$arr_slideshow_image_lookup = array();

		if (count($arr_slideshow_id) > 0)
		{
			$this->db->where_in('slideshow_id', $arr_slideshow_id);
			$arr_slideshow_image = $this->core_model->get('image');

			foreach ($arr_slideshow_image as $slideshow_image)
			{
				$arr_slideshow_image_lookup[$slideshow_image->slideshow_id] = ($slideshow_image->name != '') ? $slideshow_image->name : $slideshow_image->id . '.' . $slideshow_image->ext;
			}
		}

		foreach ($arr_slideshow as $slideshow)
		{
			$slideshow->image_name = (isset($arr_slideshow_image_lookup[$slideshow->id])) ? $arr_slideshow_image_lookup[$slideshow->id] : '';
		}

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['arr_slideshow'] = $arr_slideshow;
		$arr_data['user'] = $this->_user;
		$arr_data['pagination'] = $this->pagination->create_links();

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/slideshow', $arr_data);
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

			$slideshow_record = array();
			$image_id = 0;

			foreach ($_POST as $k => $v)
			{
				if ($k == 'image_id')
				{
					$image_id = $v;
				}
				else
				{
					$slideshow_record[$k] = $v;
				}
			}

			$slideshow_id = $this->core_model->insert('slideshow', $slideshow_record);

			if ($image_id > 0)
			{
				$this->core_model->update('image', $image_id, array('slideshow_id' => $slideshow_id));
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

	public function ajax_delete($slideshow_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$this->core_model->delete('slideshow', $slideshow_id);

			$this->db->where('slideshow_id', $slideshow_id);
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

	public function ajax_edit($slideshow_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$slideshow_record = array();
			$image_id = 0;

			foreach ($_POST as $k => $v)
			{
				if ($k == 'image_id')
				{
					$image_id = $v;
				}
				else
				{
					$slideshow_record[$k] = $v;
				}
			}

			$this->core_model->update('slideshow', $slideshow_id, $slideshow_record);

			if ($image_id > 0)
			{
				$this->db->where('slideshow_id', $slideshow_id);
				$this->core_model->update('image', 0, array('slideshow_id' => 0));

				$this->core_model->update('image', $image_id, array('slideshow_id' => $slideshow_id));
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
