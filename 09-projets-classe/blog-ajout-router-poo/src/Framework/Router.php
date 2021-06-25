<?php
namespace App\Framework;

class Router{
    protected $routes =[];
    public function __construct($routes)
    {
        $this -> routes = $routes ;
    }

    public function match($path){

            
            foreach ($this -> routes as $route)
            {
                if ($route['path'] === $path) 
                {
                    $controller = $route['controller'];
                    return $route;
                }
            }
            return false;
     }        
}