<?php
session_start();
include 'functions.php';
include 'upload.php';
$db = include 'database/start.php';
$table='users';

$user = $db->getOneUser($table,$_POST['login']);

if ($user == FALSE)
{
    header('Location: /login.php?msg=fail_username');
}
elseif ($_POST['password'] != $user['password'])
{
    header('Location: /login.php?msg=fail_password');
}
else
    {
        if ($user['name'] != '') $_SESSION['name']=$user['name'] ;
            else $_SESSION['name']=$user['login'];
        $_SESSION['rights']= $user['isadmin'];
        $_SESSION['login']=$user['login'];
        header('Location: /index.php?msg=login_success');
    };
