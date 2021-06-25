<?php
session_start();
include "fichiertemplate/fonctions.php";

// $date = date("d-m-Y")

if (isset($_SESSION['success'])){

    $success = $_SESSION['success'];
    $_SESSION['success']=null;

}
if (!empty($_POST)) {

    $titre = trim($_POST['titre']);
    $deadline = $_POST['deadline'];
    $error = ValidateForm($titre,$deadline);
    
    if(empty($error)){
        addTask($titre,$deadline);
        $_SESSION['success'] ='Tache correctement ajoutée';
        header('Location: index.php?success=true');
        exit;
    }
     
};

$mess = loadTask();







include "index.phtml";