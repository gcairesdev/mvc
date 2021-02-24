<?php

	class SobreController extends Controller
	{

		public function __construct(){
			$this->view = new MainView('sobre');
		}

		public function run(){
			$this->view->render(array('titulo'=>'Sobre'));
		}
	}
