<?php 

// Connexion à la base de données avec PDO
$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8', DB_USER, DB_PASSWORD);

// Modification de la gestion des erreurs SQL => on veut des exceptions (erreurs PHP)
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Mode de récupération des résultats => tableaux associatifs (clés = noms des colonnes de la table)
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Requête SQL de sélection des articles
$pdoStatement = $pdo->query('SELECT * FROM article ORDER BY created_at DESC');

// @TODO - Sélectionner le nom des catégories pour afficher la catégorie de chaque article

// Récupération des résultats de la requête
$articles = $pdoStatement->fetchAll();

// Affichage : inclusion du template
$template = 'home';
include TEMPLATE_DIR . '/base.phtml';