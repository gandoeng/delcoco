<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
	private $_setting;
	private $_user;

	public function __construct()
	{
		parent:: __construct();

		$this->_setting = $this->setting_model->load();
	}




	public function index()
	{	
		$lang = $this->session->userdata('site_lang');

		if($lang == NULL){
			$this->session->set_userdata('site_lang','english');
			$lang = $this->session->userdata('site_lang');
		}

		
		$header_id = 1;

		$this->db->where('header_id', $header_id);
		$this->db->where('lang', $lang);
		$this->db->order_by('section');
		
		$arr_section = $this->core_model->get('section');
		
		$arr_section_id = $this->cms_function->extract_records($arr_section, 'id_section');

		$arr_section_image_lookup = array();

		
		if (count($arr_section) > 0)
		{
			$this->db->where_in('section_id', $arr_section_id);
			$arr_section_image = $this->core_model->get('image');

			foreach ($arr_section_image as $section_image)
			{
				$arr_section_image_lookup[$section_image->section_id] = ($section_image->name != '') ? $section_image->name : $section_image->id . '.' . $section_image->ext;

			}

		}

		foreach ($arr_section as $section)
		{
			$section->image_name = (isset($arr_section_image_lookup[$section->id_section])) ? $arr_section_image_lookup[$section->id_section] : '';
		}

		// get section_item
		$this->db->where('section_id', $arr_section[3]->id_section);
		$this->db->where('name', 'motion');
		$this->db->where('lang',$lang);
		$this->db->order_by('id_section_item');
		$arr_motion_section_item = $this->core_model->get('section_item');

		//print_r($this->db);
		$this->db->where('section_id', $arr_section[3]->id_section);
		$this->db->where('name', '');
		$this->db->where('lang',$lang);
		$this->db->order_by('id_section_item');
		$arr_detail_section_item = $this->core_model->get('section_item');

		//print_r($arr_detail_section_item);

		$arr_data['setting'] = $this->_setting;

		if($lang == 'english'){
			$arr_data['arr_header'] = $this->cms_function->get_header();
		} else if($lang == 'indonesia'){
			$arr_data['arr_header'] = $this->cms_function->get_headerId();
		} else{
			$arr_data['arr_header'] = $this->cms_function->get_header();
		}
		

		$arr_data['menu'] = $header_id;
		$arr_data['arr_section'] = $arr_section;
		$arr_data['arr_motion_section_item'] = $arr_motion_section_item;
		$arr_data['arr_detail_section_item'] = $arr_detail_section_item;

		$this->load->view('index', $arr_data);
	}




	public function ajax_add_subscribe()
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			$subscribe_record = array();

			foreach ($_POST as $k => $v)
			{
				$subscribe_record[$k] = $v;
			}

			$this->db->where('email', $subscribe_record['email']);
			$count_subscribe = $this->core_model->count('subscribe');

			if ($count_subscribe > 0)
			{
				throw new Excepetion('Email already Exist');
			}

			$subscribe_id = $this->core_model->insert('subscribe', $subscribe_record);

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

	public function switchLang($language = "") {
    	$this->session->set_userdata('site_lang', $language);
    	header('Location: http://localhost:8888/delcoco/');
  	}
}