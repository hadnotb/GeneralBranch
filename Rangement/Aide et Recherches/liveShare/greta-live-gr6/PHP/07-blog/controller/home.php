<?php 

// Connexion à la base de données avec PDO
$pdo = new PDO('mysql:host=localhost;dbname=blog;charset=UTF8', 'root', '');

// @TODO - Ajouter des options à PDO pour les erreurs et le mode de récupération des résultats

// Requête SQL de sélection des articles
$pdoStatement = $pdo->query('SELECT * FROM articles');

// @TODO - Sélectionner le nom des catégories pour afficher la catégorie de chaque article

// Récupération des résultats de la requête
$articles = $pdoStatement->fetchAll();

// Affichage : inclusion du template
include '../templates/home.phtml';