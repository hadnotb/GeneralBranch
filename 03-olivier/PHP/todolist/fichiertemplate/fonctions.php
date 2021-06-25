<?php

// On creer une tache
function createTask($titre,$deadline){
    $arraytask = [
        'titre' => $titre,
        'deadline' => $deadline 
    ];
    return $arraytask ;
    return $titre;
    return $deadline;
}

// on charge un tache
function loadTask(){
    if(!file_exists("liste.json")){
        
        $task = [];    
        
    }
    else{
        $contenujson = file_get_contents("liste.json");
        $task = json_decode($contenujson, true);
        if(!$task){
            $task = [];
          
        }   
    }    
    return $task;
};
// on sauvegarde des donnée en JSON dans un fichier
function saveJson2file($task){

    $jsondata = json_encode($task);
    file_put_contents("liste.json",$jsondata);
};
// Fonction globale de l'ajout de la tache
function addTask($titre,$deadline){
    $arraytask = createTask($titre,$deadline);
    $task = loadTask();
    $task[] = $arraytask ;
    saveJson2file($task);
    
};

function ValidateForm(string $titre, string $deadline){

    $error =[];
    if($titre ==""){
        $error[]="le champ titre est vide ";
    }   

    if($deadline==""){
        $error[]= "le champ deadline est vide";
    }
    elseif($deadline < date('Y-m-d H:i:s')){
        $error[]="date invalide";
    }
    return $error;
};



