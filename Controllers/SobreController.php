<?php

	class SobreController extends Controller
	{

		public function __construct(){
			$this->view = new MainView('sobre');
		}
		
		public function executar(){
			$this->view->render(array('titulo'=>'Sobre'));
		}
	}

?>