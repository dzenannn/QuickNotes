<?php
require "./functions.php";
require "./database/Database.php";
$config = require('./database/config.php');

$db = new Database($config);

$id = $_GET['id'];

$note = $db->query('select * from notes where id = :id', ['id' => $id])->fetch();

require './views/note.view.php';