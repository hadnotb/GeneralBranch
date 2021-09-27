<?php 

namespace App\Controller;

use App\Framework\AbstractController;

class CategoryController extends AbstractController {

    public function index()
    {
        // Affichage : inclusion du template
        return $this->render('category', [
            'message' => 'categorie'
        ]);
    }
}