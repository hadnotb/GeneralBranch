<?php

use App\Model\CommentModel;
use App\Framework\UserSession;
use App\Framework\FlashBag;

// Si l'utilisateur n'est pas connecté on n'ajoute pas de commentaire
if (UserSession::isAuthenticated()) {

    $articleId = (int) $_POST['article-id'];
    $content = trim($_POST['content']);

    // Validation du formulaire : le champ commentaire est-il correctement rempli ?
    $errors = [];

    if (strlen($content)===0) {
        $errors[] = 'Le champ Commentaire est obligatoire';
    }

    // Pour chaque erreur on ajoute un message flash d'erreur
    foreach ($errors as $error) {
        FlashBag::addFlash($error, 'error');
    }

    // S'il n'y a pas d'erreurs
    if (empty($errors)) {

        $userId = UserSession::getId();
        $commentModel = new CommentModel();
        $commentModel->insertComment($content, $articleId, $userId);

        FlashBag::addFlash('Votre commentaire a bien été ajouté.');
    }
}

// Redirection
header('Location: ' . buildUrl('article', ['id' => $articleId]));
exit;