<?php
$config = require('./database/config.php');
$db = new Database($config);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if(strlen($_POST['body']) === 0) {
        $errors['body'] = 'A body is required.';
    }

    if(strlen($_POST['body']) > 600) {
        $errors['body'] = 'The body can not be more than 600 characters.';
    }

    if(empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require 'views/note-create.view.php';