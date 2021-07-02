<?php 

// Autoload de Composer 
require 'vendor/autoload.php';

// Inclusion des dépendances
require 'functions.php';

// Inclusion des fichiers de classes
require 'class/Point.php';
require 'class/Shape.php';
require 'class/Rectangle.php';
require 'class/Square.php';
require 'class/Ellipse.php';
require 'class/Circle.php';
require 'class/Polygon.php';
require 'class/Triangle.php';

// Création des formes géométriques
$rect = new Rectangle(); // Création d'un objet de la classe Rectangle
$rect->setLocation(150, 100);
$rect->setSize(50, 120);
$rect->setColor('crimson', 0.8);

$rect2 = new Rectangle(); // Création d'un deuxième objet de la classe Rectangle
$rect2->setLocation(600, 350);
$rect2->setSize(300, 75);
$rect2->setColor('forestgreen', 1);

$square = new Square();
$square->setColor('blue', 1);
$square->setLocation(800, 500);

$ellipse = new Ellipse();
$ellipse->setLocation(500,220);

$circle = new Circle();
$circle->setLocation(100, 550);
$circle->setColor('orange', 0.5);
$circle->setRadius(20);

$triangle = new Triangle();
$triangle->setCoordinates(870, 450, 620, 100, 300, 400);
$triangle->setColor('yellow', 0.3);

$polygon = new Polygon();
$polygon->setPoints([410, 95, 620, 120, 740, 350, 600, 400]);
$polygon->setColor('#4d804d', 1);

// Construction du code SVG
$svg = '';
$shapes = [];
$shapes[] = $rect;
$shapes[] = $rect2;
$shapes[] = $square;
$shapes[] = $ellipse;
$shapes[] = $circle;
$shapes[] = $polygon;
$shapes[] = $triangle;

foreach($shapes as $shape) {
    $svg .= $shape->draw();
}

// Inclusion du template
include 'index.phtml';