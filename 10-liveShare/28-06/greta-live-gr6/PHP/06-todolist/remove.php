<?php 

include 'functions.php';

// On récupère les indices des tâches à supprimer
$tasksToDelete = $_POST['tasks-to-delete'];

// On récupère l'ensemble des tâches
$tasks = loadTasks();

// On supprime les tâches à supprimer
foreach ($tasksToDelete as $index) {

    unset($tasks[$index]);
}

// On met à jour le contenu du fichier JSON
saveTasks($tasks);

// On redirige vers l'index.php
header('Location: index.php');
exit;

