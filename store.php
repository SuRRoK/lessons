<?php
session_start();
include 'functions.php';
include 'upload.php';
$db = include 'database/start.php';

if  ($_FILES['image']['name'] != '')
{
    $image_name = uploadImage($_FILES['image']);
}
else $image_name = '';

if ($_SESSION['login'] !='') {
    $author = $_SESSION['login'];
}
else $author = 'Guest';

$db -> create('posts', [
    'title'     => $_POST['title'],
    'image'     => $image_name,
    'author'    => $author,
]);
header('Location: /index.php');