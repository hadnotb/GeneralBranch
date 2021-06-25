<?php
 
class Polygon extends Shape{

    // Définition de constantes de classes = valeurs identiques et immuables pour tous les objets de la classe
    const TAG = 'polygon';

    // Déclaration des propriétés avec leur visibilité (public ou private)
    // Rem. : on peut typer les propriétés depuis PHP 8
    // Rem. : on peut donner des valeurs par défaut aux propriétés
    // Rem. : généralement les propriétés sont privées et on crée des méthodes pour y accéder : c'est l'encapsulation
    protected $points;
   

    // Définition du constructeur = appelé dès la création de l'objet, c'est une méthode "magique"
    public function __construct()
    {   
        parent::__construct();
        $this->points = [];
        
    }

    // Définition des autres méthodes de la classes = fonctions
    public function draw()
    {
        return genTag(self::TAG, [
            'points' => implode(' ', $this->points),
            'fill' => $this->color,
            'opacity' => $this->opacity
            
        ]);
    }

    public function setPoints(array $points)
    {
        $this->points = $points;
    }


}