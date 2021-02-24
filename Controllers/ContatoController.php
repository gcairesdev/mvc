<?php

class ContatoController extends Controller
{

    public function sendForm()
    {
        $mail = new \Email('vps.teste.com', 'teste@teste.com', 'senha123', 'Fulano');
        $mail->addAdress('teste@teste.com', 'Fulano');
        $mail->formatEmail(array('assunto' => 'ESCREVA AQUI', 'corpo' => 'ESCREVA AQUI'));
        $mail->sendEmail();
    }

    public function run()
    {
        if (isset($_POST['acao'])) {
            $this->sendForm();
            echo '<script>location.href="' . INCLUDE_PATH . 'contato/sucesso"</script>';
            die();
        }

        \Router::route('contato/sucesso', function () {
            $this->view = new MainView('contato-sucesso');
            $this->view->render(array('titulo' => 'Contato'));
        });

        \Router::route('contato', function () {
            $this->view = new MainView('contato');
            $this->view->render(array('titulo' => 'Contato'));
        });
    }
}
