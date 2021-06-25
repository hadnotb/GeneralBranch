<?php
 
class Ellipse extends Shape {

    // Définition de constantes de classes = valeurs identiques et immuables pour tous les objets de la classe
    const TAG = 'ellipse';

    // Déclaration des propriétés avec leur visibilité (public ou private)
    // Rem. : on peut typer les propriétés depuis PHP 8
    // Rem. : on peut donner des valeurs par défaut aux propriétés
    // Rem. : généralement les propriétés sont privées et on crée des méthodes pour y accéder : c'est l'encapsulation
    
    protected $rx;
    protected $ry;
    

    // Définition du constructeur = appelé dès la création de l'objet, c'est une méthode "magique"
    public function __construct()
    {   parent::__construct();
       
        $this->rx = 100;
        $this->ry = 50;
       
    }

    // Définition des autres méthodes de la classes = fonctions
    public function draw()
    {
        return genTag(self::TAG, [
            'cx' => $this ->location->getX(),
            'cy' => $this ->location->getY(),
            'rx' => $this->rx,
            'ry' => $this->ry,
            'fill' => $this->color,
            'opacity' => $this->opacity
        ]);
    }

   

    

    public function getRx()
    {
        return $this->width;
    }

    public function getRy()
    {
        return $this->height;
    }

    public function setRadius(int $rx, int $ry)
    {
        $this->rx = $rx;
        $this->ry = $ry;
    }

    

}