<?php

require "vendor/autoload.php";
require "functions.php";
require 'class/Autoloader.php';
Autoloader::register();





$rect = new Rectangle();
$rect -> setLocation(150,100);
$rect -> setSize(50,120);
$rect -> setColor('crimson',0.8);


$circle = new Circle();
$circle -> setLocation(420,350);
$circle -> setRadius(450);
$circle -> setColor('green',0.7);


$rect2 = new Rectangle();
$rect2 -> setLocation(250,300);
$rect2 -> setSize(60,130);
$rect2 -> setColor('crimson',0.8);


$polygon = new Polygon();
$polygon -> setPoints([100,120,150,170,210,230,450,550,450,200]);
$polygon -> setColor('black',1);


$triangle = new Triangle();
$triangle -> setCoordinates(750,750,800,850,900,950);
$triangle -> setColor('blue',0.8);


$ellipse = new Ellipse();
$ellipse -> setLocation(450,500);
$ellipse -> setRadius(50,50);
$ellipse -> setColor('black',1);


$square = new Square();
$square -> setLocation(450,500);
$square -> setSize(50,50);
$square -> setColor('red',1);


$svg ='';
$shapes =[];
$shapes[]=$rect;
$shapes[]=$rect2;
$shapes[]=$circle;
$shapes[]=$polygon;
$shapes[]=$triangle;
$shapes[]=$ellipse;
$shapes[]=$square;

foreach($shapes as $shape){
    $svg.= $shape -> draw();
}







// dump($rect);
// dump($rect2);
// dump($result);

include 'template/base.phtml' ;
