<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms_function
{
	public function extract_records($records, $field)
	{
		$data = array();

		foreach ($records as $record)
		{
			if (isset($data[$record->$field]))
			{
				continue;
			}

			$data[$record->$field] = $record->$field;
		}

		return array_values($data);
	}

	public function get_header()
	{
		$CI = &get_instance();

		$CI->db->select('id, name, link');
		$CI->db->where('lang','english');
		$CI->db->order_by('id');
		return $CI->core_model->get('header');
	}

	public function get_headerId()
	{
		$CI = &get_instance();

		$CI->db->select('id, name, link');
		$CI->db->where('lang','indonesia');
		$CI->db->order_by('id');
		return $CI->core_model->get('header');
	}

}
