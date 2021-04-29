<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipe extends CI_Controller
{
	private $_setting;
	private $_user;
	private $_random;

	public function __construct()
	{
		parent:: __construct();

		$this->_setting = $this->setting_model->load();
		$this->_random = random_string('numeric', 4);
	}




	public function all($category_id = 1, $page = 1, $query = '')
	{
		$header_id = 5;
		$category_id = ($category_id > 3 || $category_id <= 0) ? 1 : $category_id;
		$limit = 9;
		$page_limit = ($page - 1) * $limit;
		$query = trim(base64_decode($query));

		$lang = $this->session->userdata('site_lang');
		if($lang == NULL){
			$this->session->set_userdata('site_lang','english');
			$lang = $this->session->userdata('site_lang');
		}



		$this->db->select('id_category, name');
		$this->db->where('lang',$lang);
		$this->db->order_by('id_category');
		$arr_category = $this->core_model->get('category');

		if ($query != '')
		{
			$this->db->like('keyword', $query);
			$this->db->or_like('name', $query);
		}

		$this->db->limit($limit, $page_limit);
		$this->db->where('category_id', $category_id);
		$this->db->where('lang',$lang);
		$arr_recipe = $this->core_model->get('recipe');
		$arr_recipe_id = $this->cms_function->extract_records($arr_recipe, 'id_recipe');

		

		$arr_recipe_image_lookup = array();

		if (count($arr_recipe_id) > 0)
		{
			$this->db->where_in('recipe_id', $arr_recipe_id);
			$arr_recipe_image = $this->core_model->get('image');

			foreach ($arr_recipe_image as $recipe_image)
			{
				$arr_recipe_image_lookup[$recipe_image->recipe_id] = ($recipe_image->name != '') ? $recipe_image->name : $recipe_image->id . '.' . $recipe_image->ext;
			}

		}

		foreach ($arr_recipe as $recipe)
		{
			$recipe->image_name = (isset($arr_recipe_image_lookup[$recipe->id_recipe])) ? $arr_recipe_image_lookup[$recipe->id_recipe] : '';
		}

		if ($query != '')
		{
			$this->db->like('keyword', $query);
			$this->db->or_like('name', $query);
		}

		$this->db->where('category_id', $category_id);
		$this->db->where('lang',$lang);
		$count_recipe = $this->core_model->count('recipe');

		//print_r($count_recipe);

		$count_recipe = ceil($count_recipe / $limit);

		$arr_data['setting'] = $this->_setting;

		if($lang == 'english'){
			$arr_data['arr_header'] = $this->cms_function->get_header();
		} else if($lang == 'indonesia'){
			$arr_data['arr_header'] = $this->cms_function->get_headerId();
		} else{
			$arr_data['arr_header'] = $this->cms_function->get_header();
		}

		$arr_data['menu'] = $header_id;
		$arr_data['category_id'] = $category_id;
		$arr_data['arr_slideshow'] = $this->_get_slideshow_recipe();
		$arr_data['arr_section'] = $this->_get_section($header_id);
		$arr_data['arr_category'] = $arr_category;
		$arr_data['page'] = $page;
		$arr_data['query'] = $query;
		$arr_data['arr_recipe'] = $arr_recipe;
		$arr_data['count_recipe'] = $count_recipe;

		//print_r($arr_recipe);
		$this->load->view('recipe', $arr_data);
	}

	function detail($recipe_id)
	{
		$header_id = 5;
		$lang = $this->session->userdata('site_lang');
		if($lang == NULL){
			$this->session->set_userdata('site_lang','english');
			$lang = $this->session->userdata('site_lang');
		}


		//$this->db->where('id_recipe',$recipe_id);
		//$this->db->where('lang',$lang);
		//$recipe = $this->core_model->get('recipe');

		
		$recipe = $this->core_model->get('recipe',$recipe_id);

		//print_r($recipe);
		

		$this->db->where('recipe_id', $recipe->id_recipe);
		$arr_image = $this->core_model->get('image');

		//print_r($recipe);

		$recipe->image_name = '';

		if (count($arr_image) > 0)
		{
			$recipe->image_name = ($arr_image[0]->name != '') ? $arr_image[0]->name : $arr_image[0]->id . '.' . $arr_image[0]->ext;
		}

		//print_r($arr_image);

		// get related_recipe
		$this->db->where('id !=', $recipe->id_recipe);
		$this->db->like('keyword', $recipe->keyword);
		$this->db->where('category_id', $recipe->category_id);
		$this->db->limit(3);
		$arr_related_recipe = $this->core_model->get('recipe');

		//print_r($recipe);

		//print_r($arr_related_recipe);
		$arr_recipe_id = $this->cms_function->extract_records($arr_related_recipe, 'id_recipe');

		$arr_recipe_image_lookup = array();

		if (count($arr_recipe_id) > 0)
		{
			$this->db->where_in('recipe_id', $arr_recipe_id);
			$arr_recipe_image = $this->core_model->get('image');

			foreach ($arr_recipe_image as $recipe_image)
			{
				$arr_recipe_image_lookup[$recipe_image->recipe_id] = ($recipe_image->name != '') ? $recipe_image->name : $recipe_image->id . '.' . $recipe_image->ext;
			}
		}

		foreach ($arr_related_recipe as $related_recipe)
		{
			$related_recipe->image_name = (isset($arr_recipe_image_lookup[$related_recipe->id_recipe])) ? $arr_recipe_image_lookup[$related_recipe->id_recipe] : '';
			$related_recipe->likes = number_format($related_recipe->likes, 0, ',', '.');
		}

		$this->db->trans_start();

		$likes = $recipe->likes + 1;
		$this->core_model->update('recipe', $recipe->id_recipe, array('likes' => $likes));

		$this->db->trans_complete();

		$cap = $this->_generate_captcha();
		$this->session->set_userdata($cap);

		$arr_data['setting'] = $this->_setting;

		if($lang == 'english'){
			$arr_data['arr_header'] = $this->cms_function->get_header();
		} else if($lang == 'indonesia'){
			$arr_data['arr_header'] = $this->cms_function->get_headerId();
		} else{
			$arr_data['arr_header'] = $this->cms_function->get_header();
		}

		$arr_data['menu'] = $header_id;
		$arr_data['arr_slideshow'] = $this->_get_slideshow_recipe();
		$arr_data['arr_section'] = $this->_get_section($header_id);
		$arr_data['recipe'] = $recipe;
		$arr_data['arr_related_recipe'] = $arr_related_recipe;
		$arr_data['captcha'] = $cap;

		
		
		$this->load->view('recipedetail', $arr_data);
	}




	private function _generate_captcha()
	{
		$this->load->helper('captcha');

		$vals = array(
			'word' => $this->_random,
			'img_path' => './captcha/',
			'img_url' => base_url() . 'captcha/',
			'font_path' => './system/fonts/texb.ttf',
			'img_width' => 150,
			'img_height' => 30,
			'expiration' => 1800
		);

		return create_captcha($vals);
	}

	private function _get_section($header_id)
	{	
		$lang = $this->session->userdata('site_lang');
		if($lang == NULL){
			$this->session->set_userdata('site_lang','english');
			$lang = $this->session->userdata('site_lang');
		}

		$this->db->where('header_id', $header_id);
		$this->db->where('lang',$lang);
		$this->db->order_by('section');
		return $this->core_model->get('section');
	}

	private function _get_slideshow_recipe()
	{	
		$lang = $this->session->userdata('site_lang');
		if($lang == NULL){
			$this->session->set_userdata('site_lang','english');
			$lang = $this->session->userdata('site_lang');
		}
		$this->db->where('lang',$lang);
		//$this->db->order_by('id_slideshow');
		$arr_slideshow = $this->core_model->get('slideshow');
		$arr_slideshow_id = $this->cms_function->extract_records($arr_slideshow, 'id_slideshow');

		//print_r($arr_slideshow);

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
			$slideshow->image_name = (isset($arr_slideshow_image_lookup[$slideshow->id_slideshow])) ? $arr_slideshow_image_lookup[$slideshow->id_slideshow] : '';
		}

		return $arr_slideshow;
	}
}