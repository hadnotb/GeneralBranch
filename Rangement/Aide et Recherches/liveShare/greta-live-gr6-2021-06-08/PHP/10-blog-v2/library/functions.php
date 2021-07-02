<?php 

function asset(string $path): string 
{
    return SITE_BASE_URL . '/' . $path;
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
