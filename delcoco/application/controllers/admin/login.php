<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	private $_setting;

	public function __construct()
	{
		parent:: __construct();

		$this->_setting = $this->setting_model->load();
	}




	public function index()
	{
		$now = date('Y-m-d', mktime(0, 0, 0));

		$arr_data['now'] = $now;
		$arr_data['setting'] = $this->_setting;

		$this->load->view('admin/login', $arr_data);
	}




	public function ajax_login()
	{
		$json['status'] = 'success';

		try
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->db->select('id, name');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$arr_user = $this->core_model->get('user');

			if (count($arr_user) > 0)
			{
				$this->session->set_userdata('user_id', $arr_user[0]->id);
				$this->session->set_userdata('user_name', $arr_user[0]->name);
			}
			else
			{
				throw new Exception('Wrong Username or Password.');
			}
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