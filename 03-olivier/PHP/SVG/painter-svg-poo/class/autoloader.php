<?php

class Autoloader{

    static public function register(){
        spl_autoload_register([__CLASS__,'autoload']);

    }
    static public function autoload(string $classname){
        require 'class/'. $classname .'.php';
    }
}