<?php

function asset(string $path): string 
{
    return SITE_BASE_URL . '/' . $path;
}
// // récupère tous les articles
// function getAllArticles(): array
// {
//     $sql = 'SELECT *
//            FROM article
//            ORDER BY created_at DESC';

//     $database = new Database();
//     $articles = $database->getAllResults($sql);

//     return $articles;
// }
// // récupère un article en fonction de son id
// function getOneArticle(int $id): array
// {
//     $sql = 'SELECT *
//            FROM article
//            WHERE id = ?';
//     $database = new Database();
//     $article = $database->getOneResult($sql, [$id]);

//     return $article;
// }

// // récupère tous les commentaires
// function getAllComments(int $articleId): array
// {
//     $sql = 'SELECT *
//            FROM comment
//            WHERE article_id = ?
//            ORDER BY created_at DESC';
//     $database = new Database();
//     $comments = $database->getAllResults($sql, [$articleId]);

//     return $comments;
// }
// // ajoute un commentaire en base
// function insertComment(string $content, int $articleId)
// {
//     $sql = 'INSERT INTO comment
//            (content, created_at, article_id) VALUES (?, NOW(), ?)';
//     $database = new Database ();
//     $database->executeQuery($sql, [$content, $articleId]);
// }


// Cette fonction permet de construire le lien URL.
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

// function render(string $template, array $data = [])
// {
//     extract($data);

//     ob_start();

//     include TEMPLATE_DIR . '/base.phtml';

//     return ob_get_clean();
// }