<?php
use App\Model\ArticleModel;

$id = (int) $_GET['id'];
$articleModel = new ArticleModel();

$category = $articleModel ->getAllArticleByCategorie($id);





return render('category', [
    'category' => $category
 ]);