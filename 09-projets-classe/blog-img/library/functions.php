<?php

function asset(string $path): string
{
   return SITE_BASE_URL . '/' . $path;
}

//  ---------------------------FONCTIONS DE TYPE REQUETTE --------------------------------------------------
// function getPdoConnection(): PDO
// {
//    $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8';

//    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_EMULATE_PREPARES => false
//    ]);

//    return $pdo;
// }

// function executeQuery(string $sql, array $params = []): PDOStatement
// {
//    $pdo = getPdoConnection();

//    $pdoStatement = $pdo->prepare($sql);
//    $pdoStatement->execute($params);

//    return $pdoStatement;
// }

// function getOneResult(string $sql, array $params = []): array
// {
//    $pdoStatement = executeQuery($sql, $params);
//    $result = $pdoStatement->fetch();

//    return $result;
// }


// function getAllResults(string $sql, array $params = []): array
// {
//    $pdoStatement = executeQuery($sql, $params);
//    $results = $pdoStatement->fetchAll();

//    return $results;

//   -----------------------FONCTION DAPPEL AU DONNEE-----------------------------------------------
// function getAllArticles(): array
// {
//    $sql = 'SELECT *
//            FROM article
//            ORDER BY created_at DESC';

//    $articles = getAllResults($sql);

//    return $articles;
// }

// function getOneArticle(int $id): array
// {
//    $sql = 'SELECT *
//            FROM article
//            WHERE idArticle = ?';

//    $article = getOneResult($sql, [$id]);

//    return $article;
// }


// function getAllComments(int $articleId): array
// {
//    $sql = 'SELECT *
//            FROM comment
//            WHERE idArticle = ?
//            ORDER BY created_at DESC';

//    $comments = getAllResults($sql, [$articleId]);

//    return $comments;
// }




// -----------FONCTION DE GESTION DES MESSAGE FLASH--------------------

// On démarre une session si aucune session n’est encore démarrée. 
function sessionCheck(){
   if (session_status() === PHP_SESSION_NONE) {
       session_start();
   }
}


// Cette fonction permet de s’assurer que les clés dont on a besoin existent bien dans la session.
// function initFlashBag(string $type)
// {
//    sessionCheck();
//    if (!array_key_exists('flash', $_SESSION) || is_null($_SESSION['flash'])) {
//        $_SESSION['flash'] = [];
//    }

//    if (!array_key_exists($type, $_SESSION['flash']) || is_null($_SESSION['flash'][$type])) {
//        $_SESSION['flash'][$type] = [];
//    }
// }

// On prend en paramètre le type de message qui est une chaîne de caractères, et le message lui-même. On commence par initialiser le flashbag pour être sûr de ne pas avoir d’erreur

// function addFlash(string $message, string $type = 'success')
// {
//    initFlashBag($type);
//    $_SESSION['flash'][$type][] = $message;
// }

// function fetchMessages(string $type)
// {
//    initFlashBag($type);
//    $messages = $_SESSION['flash'][$type];
//    $_SESSION['flash'][$type] = null;
//    return $messages;
// }

// function hasMessages(string $type)
// {
//    initFlashBag($type);
//    return count($_SESSION['flash'][$type]);
// }
// ----------------FONCTION CONSTRUCTION ROUTE --------------------

function buildUrl(string $routeName, array $params = []): string
{
   if (!array_key_exists($routeName, ROUTES)) {
       return false;
   }

   $url = ROUTES[$routeName]['path'];

   if ($params) {
       $url .= '?' . http_build_query($params);
   }

   return $url;
}

function render(string $template, array $data = [])
{
   extract($data);
  

   ob_start();

   include TEMPLATE_DIR . '/base.phtml';

   return ob_get_clean();
}

