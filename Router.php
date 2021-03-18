<?php

class Router
{

    public static function route($path, $callback)
    {
        $url = isset($_GET['url']) ? $_GET['url'] : '';

        if ($url == $path) return $callback();

        $path = explode('/', $path);
        $url  = explode('/', $url);

        $hasParameters = true;
        $parameters = [];

        if (count($path) == count($url))
        {
            foreach ($path as $key => $value)
            {
                if ($value == '?')
                {
                    $parameters[$key] = $url[$key];
                }
                else if ($url[$key] != $value)
                {
                    $hasParameters = false;
                    break;
                }
            }

            if ($hasParameters) return $callback($parameters);
        }
    }

}
