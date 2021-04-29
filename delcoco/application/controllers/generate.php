<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generate extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}





	public function admin()
	{
		$arr_file = scandir(FCPATH . 'application/v_admin');

		foreach ($arr_file as $file)
		{
			if ($file == '.' || $file == '..')
			{
				continue;
			}

			$print = file_get_contents(FCPATH . "application/v_admin/{$file}");

			if ($print !== FALSE)
			{
				$print = str_replace("\n", "", $print);
				$print = str_replace("\t", "", $print);
				$print = str_replace("\r", "", $print);
				$print = preg_replace('/\s\s+/', ' ', trim($print));
				$print = str_replace('<?php', '<?php ', $print);

				$filename = "application/views/admin/{$file}";

				$filehandle = fopen($filename, 'w') or die("can't open file");

				fwrite($filehandle, $print);

				fclose($filehandle);
			}
		}
	}

	public function views()
	{
		$arr_file = scandir(FCPATH . 'application/v');

		foreach ($arr_file as $file)
		{
			if ($file == '.' || $file == '..')
			{
				continue;
			}

			$print = file_get_contents(FCPATH . "application/v/{$file}");

			if ($print !== FALSE)
			{
				$print = str_replace("\n", "", $print);
				$print = str_replace("\t", "", $print);
				$print = str_replace("\r", "", $print);
				$print = preg_replace('/\s\s+/', ' ', trim($print));
				$print = str_replace('<?php', '<?php ', $print);

				$filename = "application/views/{$file}";

				$filehandle = fopen($filename, 'w') or die("can't open file");

				fwrite($filehandle, $print);

				fclose($filehandle);
			}
		}
	}
}
