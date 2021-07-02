<?php 

use App\Framework\UserSession;

// Déconnexion
UserSession::logout();

// Redirection vers l'accueil
header('Location: ' . buildUrl('homepage'));
exit;