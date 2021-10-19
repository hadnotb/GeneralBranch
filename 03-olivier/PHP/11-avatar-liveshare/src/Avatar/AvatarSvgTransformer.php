<?php 

namespace App\Avatar;

class AvatarSvgTransformer {

    /**
     * Génère le code SVG qui correspond à l'avatar
     * 
     * @param Avatar $avatar
     * @return string
     */
    public function getSvg(Avatar $avatar)
    {
        // Je récupère la taille et la grille de mon objet $avatar
        $size = $avatar->getSize();
        $grid = $avatar->getGrid();

        // On démarre la tamporisation de sortie
        ob_start();

        // On inclut le fichier de template contenant le code SVG
        include 'avatar.svg.php';

        // On retourne le contenu du tampon de sortie
        return ob_get_clean();
    }

}