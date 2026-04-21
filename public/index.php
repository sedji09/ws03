<?php 

require '../helpers.php';

$routes = [
    '/' => 'controllers/home.php',
    '/listings' => 'controllers/listings/index.php',
    '/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php'
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Strip trailing slashes, but keep /
if ($uri !== '/' && strlen($uri) > 1) {
    $uri = rtrim($uri, '/');
}

if (array_key_exists($uri, $routes)) {
    require (basePath($routes[$uri]));
} else {
    http_response_code(404);
    require basePath($routes['404']);
}


?>