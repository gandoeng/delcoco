<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller
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




	public function section($section_id)
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$section = $this->core_model->get('section', $section_id);

		$this->db->where('section_id', $section_id);
		$this->db->where('type', '');
		$arr_image = $this->core_model->get('image');

		foreach ($arr_image as $image)
		{
			$image->image_name = ($image->name != '') ? $image->name : $image->id . '.' . $image->ext;
		}

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['arr_image'] = $arr_image;
		$arr_data['section'] = $section;
		$arr_data['user'] = $this->_user;

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/section_image_upload', $arr_data);
	}

	public function product($product_id)
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$product = $this->core_model->get('product', $product_id);

		$this->db->where('product_id', $product_id);
		$this->db->where('type', '');
		$arr_image = $this->core_model->get('image');

		foreach ($arr_image as $image)
		{
			$image->image_name = ($image->name != '') ? $image->name : $image->id . '.' . $image->ext;
		}

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['arr_image'] = $arr_image;
		$arr_data['product'] = $product;
		$arr_data['user'] = $this->_user;

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/product_image_upload', $arr_data);
	}




	public function ajax_delete($image_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$this->core_model->delete('image', $image_id);

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

	public function ajax_upload($type = '')
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			$source_path = $_FILES['file']['tmp_name'];
			$ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

			list($width, $height) = getimagesize($source_path);
			$filesize = ((filesize($source_path) / 1024) / 1024);

			if ($filesize > 1)
			{
				throw new Exception('Recommended filesize for image is 1mb.');
			}

			$image_id = $this->core_model->insert('image', array('ext' => $ext, 'type' => $type));

			$target_path = 'images/website/' . $image_id . '.' . $ext;

			move_uploaded_file($source_path, $target_path);

			$json['ext'] = $ext;
			$json['image_id'] = $image_id;

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

	public function ajax_upload_product($product_id = 0)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			$source_path = $_FILES['file']['tmp_name'];
			$ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

			list($width, $height) = getimagesize($source_path);
			$filesize = ((filesize($source_path) / 1024) / 1024);

			if ($filesize > 1)
			{
				throw new Exception('Recommended filesize for image is 1mb.');
			}

			$image_id = $this->core_model->insert('image', array('ext' => $ext, 'product_id' => $product_id));

			$target_path = 'images/website/' . $image_id . '.' . $ext;

			move_uploaded_file($source_path, $target_path);

			$json['ext'] = $ext;
			$json['image_id'] = $image_id;

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

	public function ajax_upload_section($section_id = 0)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			$source_path = $_FILES['file']['tmp_name'];
			$ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

			list($width, $height) = getimagesize($source_path);
			$filesize = ((filesize($source_path) / 1024) / 1024);

			if ($filesize > 1)
			{
				throw new Exception('Recommended filesize for image is 1mb.');
			}

			$image_id = $this->core_model->insert('image', array('ext' => $ext, 'section_id' => $section_id));

			$target_path = 'images/website/' . $image_id . '.' . $ext;

			move_uploaded_file($source_path, $target_path);

			$json['ext'] = $ext;
			$json['image_id'] = $image_id;

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
