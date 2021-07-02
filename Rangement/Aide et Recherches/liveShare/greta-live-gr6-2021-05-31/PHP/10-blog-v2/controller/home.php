<?php

$articleModel = new ArticleModel();
$articles = $articleModel->getAllArticles();

// Affichage : inclusion du template
return render('home', [
    'articles' => $articles
]);