<?php

// $firstname = $_GET['firstname'];
// $lastname = $_GET["lastname"];
// var_dump($firstname);

// if(!array_key_exists("firstname",$_GET))
// {
//     $firstname ="world";
// }
// else
// {
//     $firstname = $_GET["firstname"];
// }

// if(!array_key_exists("lastname",$_GET))
// {
//     $lastname ="wide web";
// }
// else
// {
//     $lastname = $_GET["lastname"];
// }
// $message = "Hello $firstname $lastname";


// // COOOOOOOOOOOOOOOOOOOOOOOOOOOOREEEEEEEEEEEEEEEEEEEEEEEEECTIIIIIIIIIIIIIIIIIIOOOOOOOOOOOONNNNNNNNNNN
// $firstname = "world";
// $lastname = "wide web";

// if(array_key_exists("firstname",$_GET))
// {
//      $firstname = $_GET["firstname"];
// }

   


// if(!array_key_exists("lastname",$_GET))
// {
//     $lastname = $_GET["lastname"];
// }

// $message = "Hello $firstname $lastname";




// OUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU
// $firstname = array_key_exists("firstname",$_GET)?$_GET["fristname"]:"world";
// OUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU
// $firstname = isset($_GET["firstname"])?$_GET["firstname"]:"world";
// OUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU
$firstname = $_GET["firstname"]??"world";




include "hello.phtml" ;