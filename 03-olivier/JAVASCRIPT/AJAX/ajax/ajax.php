<?php
    $conn = new PDO('mysql:host=localhost;dbname=projet_blog;charset=UTF8','root','alphabet');

    $dsn = 'mysql:host=localhost;dbname=projet_blog;charset=UTF8';

    $pdo = new PDO($dsn, 'root','alphabet', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);


    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    $conn ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC) ;
    $reponse = $conn->prepare('SELECT * 
                               FROM article art
                               INNER JOIN categorie cat on art.idCategorie = cat.idCategorie;');
    // je remplace ↑ query par replace pour se proteger des injections sql

    $reponse->execute(); 
    $article = $reponse->fetchAll();


    $articleJson = json_encode($article);
    echo $articleJson;
















