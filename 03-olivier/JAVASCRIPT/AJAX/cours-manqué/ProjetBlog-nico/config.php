<?php

// Fichier de Configuration à utiliser au retour au GRETA /!\

// Configuration des chemins vers les répertoires

define('PROJECT_DIR', __DIR__); // __DIR__ est une constante magique qui permet d'aller directement au dossier de travail sans taper tout le chemin d'accès (C:\wamp64\www...etc)

// Configuration des chemins vers les répertoires
define('CONTROLLER_DIR', PROJECT_DIR . '/controller');
define('TEMPLATE_DIR', PROJECT_DIR . '/templates');
define('SITE_BASE_URL', 'http://localhost:8000/');

// Configuration des accès à la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'blog-olivier');
define('DB_USER', 'root');
define('DB_PASSWORD', '4Ky9k5Q}#');
define('DB_PORT', '');