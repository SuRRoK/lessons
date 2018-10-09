<?php
include 'functions.php';
$db = include 'database/start.php';

$table = 'posts';
$id = $_GET['id'];

$post = $db->update($table, $_POST, $_GET['id']);

header('Location: /index.php');