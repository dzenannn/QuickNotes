<?php
$config = require base_path("./database/config.php");
$db = new Database($config);
$id = $_GET['id'];

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId); 
 
view("notes/index.view.php", [
    'heading' => 'Note',
    'note' => $note
]);