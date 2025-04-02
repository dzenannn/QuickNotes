<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/notes' => 'controllers/notes.php',
];

function routeToController($url, $routes) {
    if(array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        require "./views/404.view.php";
    }
}

routeToController($url, $routes);