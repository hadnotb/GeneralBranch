<?php 

function asset(string $path): string 
{
    return SITE_BASE_URL . '/' . $path;
}

function insertComment(string $content, int $articleId)
{
    $sql = 'INSERT INTO comment
           (content, created_at, article_id) VALUES (?, NOW(), ?)';

    $database = new Database();
    $database->executeQuery($sql, [$content, $articleId]);
}

function sessionCheck(){
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function initFlashBag(string $type)
{
    sessionCheck();
    if (!array_key_exists('flash', $_SESSION) || is_null($_SESSION['flash'])) {
        $_SESSION['flash'] = [];
    }

    if (!array_key_exists($type, $_SESSION['flash']) || is_null($_SESSION['flash'][$type])) {
        $_SESSION['flash'][$type] = [];
    }
}

function addFlash(string $message, string $type = 'success')
{
    initFlashBag($type);
    $_SESSION['flash'][$type][] = $message;
}

function fetchMessages(string $type)
{
    initFlashBag($type);
    $messages = $_SESSION['flash'][$type];
    $_SESSION['flash'][$type] = null;
    return $messages;
}

function hasMessages(string $type)
{
    initFlashBag($type);
    return count($_SESSION['flash'][$type]);
}

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
