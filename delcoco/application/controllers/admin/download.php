<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller
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




	public function subscribe()
	{
		$this->db->select('email');
		$arr_subscribe = $this->core_model->get('subscribe');

		$objPHPExcel = $this->_create_excel('Email Subscribe List');

		if (count($arr_subscribe) > 0)
		{
			$this->_setautosize($objPHPExcel, array('A'));

			$objPHPExcel->getActiveSheet()->setCellValue('A1', 'EMAIL');
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_MEDIUM);
			$this->_setbold($objPHPExcel, array('A1'));

			$row = 1;

			foreach ($arr_subscribe as $subscribe)
			{
				$row += 1;

				$objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $subscribe->email);
			}
		}
		else
		{
			$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Tidak ada data.');
		}

		$this->_download_excel($objPHPExcel, 'Email Subscribe List');
	}




	private function _create_excel($title)
	{
		$this->load->helper('download');

		$this->load->library('../third_party/PHPExcel');
		$this->load->library('../third_party/PHPExcel/IOFactory');

		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setTitle($title);

		return $objPHPExcel;
	}

	private function _download_excel($objPHPExcel, $title)
	{
		$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save("tmp/{$title}.xls");
		$data = file_get_contents ("tmp/{$title}.xls");
		unlink("tmp/{$title}.xls");
		force_download("{$title}.xls", $data);
	}

	private function _setautosize($objPHPExcel, $arr_column = array())
	{
		foreach ($arr_column as $column)
		{
			$objPHPExcel->getActiveSheet()->getColumnDimension($column)->setAutoSize(TRUE);
		}
	}

	private function _setbold($objPHPExcel, $arr_cell = array())
	{
		foreach ($arr_cell as $cell)
		{
			$objPHPExcel->getActiveSheet()->getStyle($cell)->getFont()->setBold(TRUE);
		}
	}
}
