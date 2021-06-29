<?php 

namespace App\Controller\Admin;

use App\Framework\AbstractController;
use App\Model\ArticleModel;
use App\Framework\UserSession;

class AdminController extends AbstractController {

    /**
     * Action responsable de l'affichage du dashboard
     */
    public function index()
    {
        // Protection de l'administration
        if (!UserSession::hasRoles('ADMIN', 'EDITOR')) {
            http_response_code(403);
            echo 'Accès interdit';
            exit;
        }

        return $this->render('admin/admin', [
            'articles' => (new ArticleModel())->getAllArticles()
        ]);
    }
}