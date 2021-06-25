<?php


$city = ["aix en provence","Marseille","Paris"];

if(!empty($_POST))
{
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $ville = $city[$_POST["city"]];

    $message ="hello $firstname $lastname de $ville";
}

include "hello.phtml" ;