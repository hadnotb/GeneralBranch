<?php

namespace App\Framework;

// Création de la classe Database contenant les fonctionnalités qui suivent.
class Database
{   
    // Réutilistion de $pdo, pdo dans les fonctions.    
    private $pdo;

    // Construction de l'objet PDO.
    public function __construct()
    {
        $this->pdo = $this->getPdoConnection();
    }
    // Cette fonction va construire la connexion avec PDO à la base de données et retourner l’objet PDO. 
        function getPdoConnection(): \PDO
    {
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8';

        $pdo = new \PDO($dsn, DB_USER, DB_PASSWORD, [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_EMULATE_PREPARES => false
        ]);

        return $pdo;
    }
    // Cette fonction se charge de préparer une requête et de l’exécuter. Elle retourne l’objet PDOStatement. 
    function executeQuery(string $sql, array $params = []): \PDOStatement
    {


        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->execute($params);

        return $pdoStatement;
    }
    // exécute une requête de sélection et retourne UN résultat
    function getOneResult(string $sql, array $params = [])
    {
        $pdoStatement = $this->executeQuery($sql, $params);
        $result = $pdoStatement->fetch();

        return $result;
    }
    // exécute une requête de sélection et retourne TOUS les résultats
    function getAllResults(string $sql, array $params = [])
    {
        $pdoStatement = $this->executeQuery($sql, $params);
        $results = $pdoStatement->fetchAll();

        return $results;
    }
    // Permet d'insérer le dernier élément (préparation AJAX)
    function insert(string $sql, array $params = []): \PDOStatement
    {


        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->execute($params);

        return $this->pdo->lastInsertId();
    }
}
