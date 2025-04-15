<?php
$config = require "./database/config.php";

$db = new Database($config);

$notes = $db->query('select * from notes where user_id = 1')->all();

require './views/notes/index.view.php';