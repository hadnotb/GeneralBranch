<?php 

namespace App\Controller\Admin;

use App\Framework\AbstractController;

class ArticleController extends AbstractController {

    public function new()
    {

        return $this->render('admin/article/new');
    }
}