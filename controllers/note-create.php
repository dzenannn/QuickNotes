<?php
require 'Validator.php';
$config = require('./database/config.php');
$db = new Database($config);

// dd(Validator::email('mecinovicdzenan1@gmail.com'));
// if(!Validator::email('asdfasdfasdfasdfasdfasdf')) dd("Not valid email");

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if(!Validator::emptyString($_POST['body'], 1, 600)) {
        $errors['body'] = 'A body of not more than 1,000 characters is required.';
    }

    if(empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require 'views/note-create.view.php';