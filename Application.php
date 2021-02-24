<?php

define('INCLUDE_PATH', 'http://localhost/mvc/');
define('INCLUDE_PATH_FULL', 'http://localhost/mvc/Views/pages/');
class Application
{

    public function run()
    {
        $url = $_GET['url'];
        $urlFirstArg = explode('/', $url)[0];

        $controller = isset($url) ? $urlFirstArg : 'Home';
        $controller = ucfirst($controller) . 'Controller';

        if (file_exists("Controllers/$controller.php")) {
            $controler = new $controller();
            $controler->run();
        } else {
            die("Página não encontrada!");
        }
    }
}
