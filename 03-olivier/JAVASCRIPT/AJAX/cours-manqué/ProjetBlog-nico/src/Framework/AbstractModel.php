<?php


namespace App\Framework;

// Création de la classe de Modèle Abstract Modèle
abstract class AbstractModel
{   
    // Protection
    protected $database;

    // Construction de l'objet.
    public function __construct()
    {
        // Construction de l'objet Database.
        $this->database = new Database();
    }
}
