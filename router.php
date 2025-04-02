<?php

function abort($code = 404) {
    http_response_code($code);
    require "./views/404.view.php";
    die();
}

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/notes' => 'controllers/notes.php',
];

function routeToController($url, $routes) {
    if(array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
    }
}

routeToController($url, $routes);