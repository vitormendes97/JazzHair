<?php 

	class Pictures {

		public function __construct()
		{}


		public function getFile($path,$type)
		{
			$files = array();

			$directory = scandir($path);

			unset($directory[0] , $directory[1]);

			foreach ($directory as $file_name) {
				$file = "/jazz/pictures/{$type}/{$file_name}";

				array_push($files, $file);
			}
			return $files;
		}
	}