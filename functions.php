<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function isUrl($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if(!$condition) abort($status);
}

# Today I was doing some exercises in PHP (local directory). 13.04.
# Today I was doing some exercises in PHP (local directory). 14.04.