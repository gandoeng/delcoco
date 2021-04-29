<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactus extends CI_Controller
{
	private $_setting;
	private $_random;

	public function __construct()
	{
		parent:: __construct();

		$this->_setting = $this->setting_model->load();
		$this->_random = random_string('numeric', 4);
	}




	public function index()
	{
		$header_id = 6;
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
		$arr_data['arr_section'] = $arr_section;
		$arr_data['captcha'] = $cap;

		//print_r($cap);
		$this->load->view('Contactus', $arr_data);
	}




	public function ajax_send_email()
	{
		$json['status'] = 'success';

		try
		{
			$this->load->library('email');

			$this->email->from('info@sarisegarhusada.com', 'Sari Segar Husada');
			$this->email->to('pauluswpurwanto@gmail.com');
			$this->email->bcc(array('sugianto@labelideas.co', $this->_setting->company_email));

			$message = "Dear Admin \n\nan email has contacted you\n\nName: {$this->input->post('name')}\nEmail: {$this->input->post('email')}\nPhone: {$this->input->post('phone')}\nMessage: {$this->input->post('Message')}\n\nThank you.}";

			$this->email->subject("Enquiry from {$this->input->post('email')}");
			$this->email->message($message);

			@$this->email->send();
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
}