<?php
$config = require base_path("./database/config.php");
$db = new Database($config);

$notes = $db->query('select * from notes where user_id = 1')->all();

view("notes/index.view.php", [
    'heading' => 'Notes',
    'notes' => $notes
]);