<?php 

class Database {

    function getPdoConnection(): PDO
    {
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8';

        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ]);

        return $pdo;
    }

    function executeQuery(string $sql, array $params = []): PDOStatement
    {
        $pdo = $this->getPdoConnection();

        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute($params);

        return $pdoStatement;
    }

    function getOneResult(string $sql, array $params = []): array
    {
        $pdoStatement = $this->executeQuery($sql, $params);
        $result = $pdoStatement->fetch();

        return $result;
    }

    function getAllResults(string $sql, array $params = []): array
    {
        $pdoStatement = $this->executeQuery($sql, $params);
        $results = $pdoStatement->fetchAll();

        return $results;
    }

}