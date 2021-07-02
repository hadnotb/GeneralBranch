<?php 

// Démarrage de la session
session_start();

/*******************************/
/*  INCLUSION DES DEPENDANCES  */
/*******************************/
include 'functions.php';

/*******************************/
/*       TRAITEMENTS           */
/*******************************/

// Récupération de l'éventuel message de succès
if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];
    $_SESSION['success'] = null;
}

// Si on a reçu des données dans $_POST, on va les traiter ! 
if (!empty($_POST)) {

    // Récupération des données du formulaire
    $title = trim($_POST['title']);
    $deadline = $_POST['deadline'];

    // Valider les données : vérifier que les champs sont bien remplis
    $errors = validateForm($title, $deadline);

    // Si le tableau d'erreurs est vide (tout est OK)...
    if (empty($errors)) {

        // Ajout de la nouvelle tâche
        addTask($title, $deadline);

        // Ajout d'un message de succès en session
        $_SESSION['success'] = 'Tâche correctement ajoutée';

        // On redirige l'internaute pour perdre les données du formulaire et éviter de renvoyer les données en rafraichissant la page
        header('Location: index.php');
        exit;
    }
}

// Dans tous les cas on va chercher les tâches pour les afficher sur la page
$tasks = loadTasks();

/*******************************/
/*       AFFICHAGE             */
/*******************************/

// Inclusion du fichier de template
include 'index.phtml';