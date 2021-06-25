<?php
include 'fichiertemplate/fonctions.php';


var_dump($_POST);

$tasksToDelete = $_POST['tasks-to-delete'];
$tasks = loadTask();

foreach($tasksToDelete as $index){

    unset($tasks[$index]);
}
saveJson2file($tasks);
header('Location: index.php');
exit;