<?php 

/*****************************/
/*  DEFINITION DE FONCTIONS  */
/*****************************/

/**
 * Crée un tableau associatif représentant une tâche à partir d'un titre et d'une date limite
 * @param string $title : le titre de la tâche
 * @param string $deadline : la date limite au format américain 'yyyy-mm-dd'
 * @return array le tableau associatif représentant la tâche
 */
function createTask(string $title, string $deadline): array{

    // Création du tableau associatif stockant le titre et la deadline
    $task = [
        'title' => $title,
        'deadline' => $deadline 
    ];

    // On retourne ce tableau en sortie comme résultat de la fonction
    return $task;
}

/**
 * Charge les tâches existantes à partir du fichier JSON et retourne un tableau de tâches 
 * Si le fichier JSON n'existe pas ou bien s'il est vide, retourne un tableau vide
 * @return array Le tableau de tâches
 */
function loadTasks(): array 
{
    // Si le fichier n'existe pas
    if (!file_exists('tasks.json')) {
        $tasks = [];
    } 
    // Sinon (le fichier existe)
    else { 

        // On récupère le contenu du fichier et on le parse (désérialise)
        $jsonData = file_get_contents('tasks.json');
        $tasks = json_decode($jsonData, true);

        // Si le fichier est vide... (aucune tâche)
        if (!$tasks) {

            // Alors on crée un tableau vide
            $tasks = [];
        }
    }

    return $tasks;
}


function saveJson2File($data, string $filename)
{
    // On sérialise notre tableau de tâches en JSON
    $jsonData = json_encode($data);

    // On l'enregistre dans le fichier JSON
    file_put_contents($filename, $jsonData);
}


function saveTasks(array $tasks)
{
    saveJson2File($tasks, 'tasks.json');
}


function addTask(string $title, string $deadline)
{
    // Construction d'un tableau associatif pour stocker les données d'UNE tâche
    /*
    $task = [
        'title' => $title,
        'deadline' => $deadline 
    ];
    */
    $task = createTask($title, $deadline);

    // Ajout de la nouvelle tâche à la liste de tâches - Question : existe-t-il déjà des tâches dans le fichier JSON ou non ?

    /*
    // Si le fichier n'existe pas
    if (!file_exists('tasks.json')) {
        $tasks = [];
    } 
    // Sinon (le fichier existe)
    else { 

        // On récupère le contenu du fichier et on le parse (désérialise)
        $jsonData = file_get_contents('tasks.json');
        $tasks = json_decode($jsonData, true);

        // Si le fichier est vide... (aucune tâche)
        if (!$tasks) {

            // Alors on crée un tableau vide
            $tasks = [];
        }
    }
    */
    $tasks = loadTasks();

    // Ici dans tous les cas la variable $tasks doit contenir un tableau
    // var_dump($tasks);
   
    // Dans tous les cas on ajoute la nouvelle tâche au tableau de tâches     
    $tasks[] = $task;

    // Enregistrement des tâches
    saveTasks($tasks);
}


function validateForm(string $title, string $deadline): array
{
    // Création d'un tableau vide qui va contenir les erreurs
    $errors = [];

    // Si le champ 'title' est vide... 
    if (!$title) {
        $errors[] = 'Le champ "titre" est obligatoire';
    }

    // Si le champ 'deadline' est vide... 
    if (!$deadline) {
        $errors[] = 'Le champ "date limite" est obligatoire';
    }

    // Si la date de deadline est dans le passé... 
    else if ($deadline < date('Y-m-d')) {
        $errors[] = 'La deadline doit être postérieure à aujourd\'hui';
    }

    return $errors;
}