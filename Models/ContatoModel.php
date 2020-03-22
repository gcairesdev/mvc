<?php

	class ContatoModel{

		public static function enviarFormulario(){
			$mail = new \Email('vps.teste.com','teste@teste.com','senha123','Fulano');
			$mail->addAdress('teste@teste.com','Fulano');
			$mail->formatarEmail(array('assunto'=>'ESCREVA AQUI','corpo'=>'ESCREVA AQUI'));
			$mail->enviarEmail();
		}

	}

?>