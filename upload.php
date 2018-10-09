<?php
session_start();
function uploadImage ($image)
{
    $extension = pathinfo($image['name'],PATHINFO_EXTENSION);
    $pic_name = uniqid().".". $extension;
    $tmp_name = $image['tmp_name'];
    move_uploaded_file($tmp_name, "images/".$pic_name);
    return $pic_name;
}