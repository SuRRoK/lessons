<?php
session_start();
$name =  $_SESSION['name'];
if ($_GET['msg']=='login_success')
{
    echo "<h3>Добро пожаловать, $name</h3>";
}
if ($_GET['msg']=='exit')
{
    echo "<h3>Вы вышли из системы</h3>";
}

include 'functions.php';

$db = include 'database/start.php';


$posts = $db->getAll('posts');

include 'index.view.php';



