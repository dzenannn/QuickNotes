<?php
// require "./router.php";

function isUrl($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

require "./views/index.view.php";