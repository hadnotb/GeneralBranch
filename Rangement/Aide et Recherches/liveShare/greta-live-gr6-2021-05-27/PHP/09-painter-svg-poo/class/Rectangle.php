<?php
 
class Rectangle extends Shape {

    // Définition de constantes de classes = valeurs identiques et immuables pour tous les objets de la classe
    const TAG = 'rect';

    // Déclaration des propriétés avec leur visibilité (public ou private)
    // Rem. : on peut typer les propriétés depuis PHP 8
    // Rem. : on peut donner des valeurs par défaut aux propriétés
    // Rem. : généralement les propriétés sont privées et on crée des méthodes pour y accéder : c'est l'encapsulation
    protected $width;
    protected $height;

    // Définition du constructeur = appelé dès la création de l'objet, c'est une méthode "magique"
    public function __construct()
    {
        parent::__construct();
        $this->width = 100;
        $this->height = 50;
    }

    // Définition des autres méthodes de la classes = fonctions
    public function draw()
    {
        return genTag(self::TAG, [
            'x' => $this->location->getX(),
            'y' => $this->location->getY(),
            'width' => $this->width,
            'height' => $this->height,
            'fill' => $this->color,
            'opacity' => $this->opacity
        ]);
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setSize(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

}