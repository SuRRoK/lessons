<?php
include 'functions.php';
$db = include 'database/start.php';
$table = 'posts';
$id = $_GET['id'];
$image = $_GET['image'];
$db->delete ($table, $id);

//dd(is_file('images/'.$image));

if (is_file('images/'.$image))
{
    unlink('images/'.$image);
}

header('Location: /index.php');
?>