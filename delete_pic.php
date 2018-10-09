<?php
include 'functions.php';
$db = include 'database/start.php';
$table = 'posts';
$id = $_GET['id'];
$image= $_GET['image'];
$db->update($table,['image'=>''], $id);

    if (is_file('images/'.$image))
    {
        unlink('images/'.$image);
    }

header('Location: /show.php?id='.$id);
