<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends CI_Controller
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
		$header_id = 7;

		$lang = $this->session->userdata('site_lang');
		if($lang == NULL){
			$this->session->set_userdata('site_lang','english');
			$lang = $this->session->userdata('site_lang');
		}


		$this->db->where('header_id', $header_id);
		$this->db->where('lang',$lang);
		$this->db->order_by('section');
		$arr_section = $this->core_model->get('section');
		$arr_section_id = $this->cms_function->extract_records($arr_section, 'id_section');

		$this->db->select('id, question, answer');
		$this->db->order_by('id');
		$arr_faq = $this->core_model->get('faq');

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
		$arr_data['arr_faq'] = $arr_faq;

		$this->load->view('faq', $arr_data);
	}
}