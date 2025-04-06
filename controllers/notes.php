<?php
$config = require('./database/config.php');

$db = new Database($config);

$notes = [];
$notes = $db->query('select * from notes')->fetchAll();

require './views/notes.view.php';