<?php

	class ContatoController extends Controller
	{

		public function executar(){
			if(isset($_POST['acao'])){
				ContatoModel::enviarFormulario();
				echo '<script>location.href="'.INCLUDE_PATH.'contato/sucesso"</script>';
				die();
			}

			\Router::rota('contato/sucesso',function(){
				$this->view = new MainView('contato-sucesso');
				$this->view->render(array('titulo'=>'Contato'));
			});

			\Router::rota('contato',function(){
				$this->view = new MainView('contato');
				$this->view->render(array('titulo'=>'Contato'));
			});
		}
	}

?>