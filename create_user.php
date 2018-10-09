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
$login = mb_strtolower($_POST['login']);
if (($db->unicRecord($login ,'login','users')) === TRUE and $login !='' and $_POST['password']!='' and $_POST['password'] == $_POST['r_password'])  {

   $db -> create('users', [
        'login'     => $login,
        'name'      => $_POST['name'],
        'email'     => $_POST['email'],
        'password'  => $_POST['password'],
        'image'     => $image_name,
    ]);
    header('Location: /login.php?msg=success');
}
else header('Location: /login.php?msg=fail');

