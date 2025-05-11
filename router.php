<?php

$routes = require "routes.php";

function abort($code = 404) {
    http_response_code($code);
    require "{$code}.view.php";
    die();
}

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeToController($url, $routes) {
    if(array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
        die();
    }
}

routeToController($url, $routes);