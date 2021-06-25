<?php

class Rectangle extends Shape{
    const TAG = 'rect';

  
    private $height; 
    private $width; 
    

    public function __construct(){
        // Initialisation de l'objet
        parent::__construct();
        $this -> height = 150 ;
        $this -> width = 100;
       
    }
    public function draw(){

        return genTag(self::TAG,[
            'x'=> $this ->location->getX(),
            'y'=> $this ->location->getY(),
            'width'=> $this -> width,
            'height'=> $this -> height,
            'fill'=> $this -> color,
            'opacity'=> $this -> opacity
           
        ]);
    }

    
    function getHeight(){

        return $this -> height;
    }

    function getWidth(){
        return $this -> width;
    }

  
    function setSize(int $height, int $width){

        $this -> height = $height;
        $this -> width = $width;
    }
    
    
}