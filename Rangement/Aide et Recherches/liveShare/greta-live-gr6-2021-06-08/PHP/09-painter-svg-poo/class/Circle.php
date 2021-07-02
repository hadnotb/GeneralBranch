<?php
 
class Circle extends Ellipse {

    // Définition de constantes de classes = valeurs identiques et immuables pour tous les objets de la classe
    const TAG = 'circle';

    public function setRadius(int $radius, $useless = null)
    {
        $this->rx = $radius;
        $this->ry = $radius;
    }

    // Définition des autres méthodes de la classes = fonctions
    public function draw()
    {
        return genTag(self::TAG, [
            'cx' => $this->location->getX(),
            'cy' => $this->location->getY(),
            'r' => $this->rx,
            'fill' => $this->color,
            'opacity' => $this->opacity
        ]);
    }
}