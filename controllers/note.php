<?php
$config = require('./database/config.php');
$db = new Database($config);
$id = $_GET['id'];

$heading = 'Note';
$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId); 
 
require './views/note.view.php';