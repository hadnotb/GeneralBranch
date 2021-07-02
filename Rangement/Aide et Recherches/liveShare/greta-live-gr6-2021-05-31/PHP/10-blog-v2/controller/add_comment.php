<?php

$articleId = (int) $_POST['article-id'];
$content = trim($_POST['content']);

// Validation du formulaire et gestion des messages d'erreurs
$_SESSION['flash'] = [
    'errors' => []
];

if (!$content) {
    addFlash('error','Le champ Commentaire est obligatoire');
}

if (empty($_SESSION['flash']['errors'])) {

    $commentModel = new CommentModel();
    $comment = $commentModel->insertComment($content, $articleId);

    addFlash('Votre commentaire a bien été ajouté.');

    header('Location: ' . buildUrl('article', ['id' => $articleId]));
    exit;
}