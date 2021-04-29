<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
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




	public function change_password()
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$arr_data['link'] = '';
		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;
		$arr_data['user'] = $this->_user;

		$this->load->view('admin/html', $arr_data);
		$this->load->view('admin/change_password', $arr_data);
	}




	public function ajax_update()
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->core_model->update('user', $this->_user->id, array('username' => $username, 'password' => $password));

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
