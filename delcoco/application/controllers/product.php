<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller
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
		$header_id = 4;
		$lang = $this->session->userdata('site_lang');
		if($lang == NULL){
			$this->session->set_userdata('site_lang','english');
			$lang = $this->session->userdata('site_lang');
		}

		$this->db->where('header_id', $header_id);
		$this->db->where('lang', $lang);
		$this->db->order_by('section');
		
		$arr_section = $this->core_model->get('section');
	
		$this->db->limit(4);
		$this->db->where('lang', $lang);
		$this->db->order_by('id_benefit');
		$arr_benefit = $this->core_model->get('benefit');

		$arr_benefit_id = $this->cms_function->extract_records($arr_benefit, 'id_benefit');
		
		$arr_benefit_image_lookup = array();

		if (count($arr_benefit_id) > 0)
		{
			$this->db->where_in('benefit_id', $arr_benefit_id);
			$arr_benefit_image = $this->core_model->get('image');
			
			foreach ($arr_benefit_image as $benefit_image)
			{
				$arr_benefit_image_lookup[$benefit_image->benefit_id][$benefit_image->type] = ($benefit_image->name != '') ? $benefit_image->name : $benefit_image->id . '.' . $benefit_image->ext;
				}
		}
		//$this->db->where('header_id', $header_id);
		$this->db->where('lang',$lang);
		$this->db->order_by('id_product');
		$arr_product = $this->core_model->get('product');
		$arr_product_id = $this->cms_function->extract_records($arr_product, 'id_product');
		

		$arr_product_image_lookup = array();
		$arr_product_image_thumbnail_lookup = array();

		if (count($arr_product_id) > 0)
		{
			$this->db->where_in('product_id', $arr_product_id);
			$arr_product_image = $this->core_model->get('image');

			foreach ($arr_product_image as $product_image)
			{
				if ($product_image->type == 'Thumbnail')
				{
					$arr_product_image_thumbnail_lookup[$product_image->product_id] = ($product_image->name != '') ? $product_image->name : $product_image->id . '.' . $product_image->ext;
				}
				else
				{
					$arr_product_image_lookup[$product_image->product_id][] = ($product_image->name != '') ? $product_image->name : $product_image->id . '.' . $product_image->ext;
				}
			}
		}

		$arr_product_main = array();
		$arr_product_other = array();

		foreach ($arr_product as $product)
		{
			$product->image_name = (isset($arr_product_image_thumbnail_lookup[$product->id_product])) ? $arr_product_image_thumbnail_lookup[$product->id_product] : '';


			if ($product->category == 'Main')
			{
				$arr_product_main[] = clone $product;

				continue;
			}

			$arr_product_other[] = clone $product;

			
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
		$arr_data['arr_benefit'] = $arr_benefit;
		$arr_data['arr_benefit_image_lookup'] = $arr_benefit_image_lookup;
		$arr_data['arr_product'] = $arr_product;
		$arr_data['arr_product_main'] = $arr_product_main;
		$arr_data['arr_product_other'] = $arr_product_other;
		$arr_data['arr_product_image_lookup'] = $arr_product_image_lookup;

		//print_r($arr_product_other);
		$this->load->view('product', $arr_data);
	}
}