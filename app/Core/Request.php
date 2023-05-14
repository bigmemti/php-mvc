<?php

namespace App\Core;


class Request {
    
    public static $routes = [];

    public static function addRoute($uri,array $action, $method)
    {
        self::$routes[$uri] = [
            'class' => $action[0],
            'action' => $action[1],
            'method' => $method
        ];
    }

    public static function get($uri,array $action)
    {
        self::addRoute($uri, $action,'get');
    }

    public static function run()
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';
        if(array_key_exists($path,self::$routes)){
            $class = self::$routes[$path]['class'];
            $action =self::$routes[$path]['action'];
            $respons = new $class();
            $respons->$action();
            return 0;
        }
    }
}
