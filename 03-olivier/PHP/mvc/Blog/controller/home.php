<?php

echo("Accueil");


    $servername = 'localhost';
    $username = 'root';
    $password = 'H79561384200*h';
    
    //On établit la connexion
    $conn = new PDO(/* */'mysql:host='. DB_HOST .';dbname='.DB_NAME.';charset=UTF8'/* */, $username, $password);
                        //On appelle cette partie  le ↑ DATA SOURCE NAME 

    //Modificiation de la gestion des erreus SQL on veut des exeption erreur php                   
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  


    //Mode de récup des résultast = tableaux associatif(clés = noms des colonnes)
    $conn ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC) ;

    $reponse = $conn->query('SELECT * from article');

    

    $articles = $reponse->fetchAll();
    dump($articles);
        
    // while ($donnees = $reponse->fetch()){

    // echo $donnees['lib'] . '<br />';
    // }

            
        

            
            












$template ="home";

include TEMPLATE_DIR . '/base.phtml';