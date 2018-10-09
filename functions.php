<?php

function dd ($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}

function ConnectToDB ()
{
    $pdo = new PDO('mysql:host=127.0.0.1; dbname = test2; charset=utf8;','testuser','testpass');
    return $pdo;
}


