<?php

abstract class Shape{
     
    protected $color;
    protected $opacity;
    protected $location;

    abstract public function draw();

    public function __construct(){
        // Initialisation de l'objet
        
        $this ->location = new Point();
        
        $this -> color = 'red';
        $this -> opacity = 1;
    }
    

    public function getX(){

        return $this -> x;
    }

    public function getY(){

        return $this -> y;
    }


    public function getColor(){

        return $this -> color ;
    }

    

    public function getOpacity(){
        return $this -> opacity;
    }
    

    public function setLocation($x,$y){

        $this -> location -> moveTo($x,$y);
        
    }

    public function setColor($color,$opacity){

        $this -> color = $color;
        $this -> opacity = $opacity;
    }

}