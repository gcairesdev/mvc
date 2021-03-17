<?php

define('INCLUDE_PATH', 'http://localhost/mvc/');
define('INCLUDE_PATH_FULL', 'http://localhost/mvc/Views/pages/');

class Application
{

    public function run()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        
        $urlFirstArg = explode('/', $url)[0];

        $controller = $url ? $urlFirstArg : 'Home';
        $controller = ucfirst($controller) . 'Controller';

        if (file_exists("Controllers/$controller.php"))
        {
            $controler = new $controller();
            return $controler->run();
        }

        return die('Página não encontrada!');
    }

}
