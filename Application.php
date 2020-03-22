<?php
	
	define('INCLUDE_PATH','http://localhost/mvc/');
	define('INCLUDE_PATH_FULL','http://localhost/mvc/Views/pages/');
	class Application
	{
		
		public function executar(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){

				$controler = new $url();
				$controler->executar();
			}else{
				die("Não existe esse controller!");
			}
		}
	}
	
?>