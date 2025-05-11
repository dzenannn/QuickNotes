<?php
$config = require base_path('config.php');
$db = new Database($config);

$notes = $db->query('select * from notes')->all();

view("notes/index.view.php", [
    'heading' => 'Notes',
    'notes' => $notes
]);