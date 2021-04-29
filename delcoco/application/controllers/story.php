<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Story extends CI_Controller
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
		$header_id = 3;

		$lang = $this->session->userdata('site_lang');
		if($lang == NULL){
			$this->session->set_userdata('site_lang','english');
			$lang = $this->session->userdata('site_lang');
		}

		$this->db->where('header_id', $header_id);
		$this->db->where('lang', $lang);
		$this->db->order_by('section');

		$arr_section = $this->core_model->get('section');
		$arr_section_id = $this->cms_function->extract_records($arr_section, 'id_section');

		$arr_section_image_lookup = array();

		$this->db->where('section_id', $arr_section[5]->id_section);
		$arr_section_image = $this->core_model->get('image');


		foreach ($arr_section_image as $section_image)
		{
			$arr_section_image_lookup[] = ($section_image->name != '') ? $section_image->name : $section_image->id . '.' . $section_image->ext;
		}

		$this->db->where('section_id', $arr_section[4]->id_section);
		$this->db->where('lang',$lang);
		$this->db->order_by('id');

		$arr_detail_section_item = $this->core_model->get('section_item');
		$arr_section_item_id = $this->cms_function->extract_records($arr_detail_section_item, 'id_section_item');
		$arr_section_item_image_lookup = array();

		if (count($arr_section_item_id) > 0)
		{
			$this->db->where_in('section_item_id', $arr_section_item_id);
			$arr_section_item_image = $this->core_model->get('image');

			foreach ($arr_section_item_image as $section_item_image)
			{
				$arr_section_item_image_lookup[$section_item_image->section_item_id] = ($section_item_image->name != '') ? $section_item_image->name : $section_item_image->id . '.' . $section_item_image->ext;
			}
		}

		foreach ($arr_detail_section_item as $detail_section_item)
		{
			$detail_section_item->image_name = (isset($arr_section_item_image_lookup[$detail_section_item->id_section_item])) ? $arr_section_item_image_lookup[$detail_section_item->id_section_item] : '';

		}

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
		$arr_data['arr_section_image_lookup'] = $arr_section_image_lookup;
		$arr_data['arr_detail_section_item'] = $arr_detail_section_item;

		$this->load->view('story', $arr_data);
	}
}