<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Показ записи</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<?php include 'menu.php';

include 'functions.php';
$db = include 'database/start.php';

$table = 'posts';
$id = $_GET['id'];
$post = $db->GetOne ($table, $id);
?>
<div><h1><?php echo($post ['title']);?></h1><h4>by <?php echo($post ['author']);?></h4> </div>
<?php if ($post['image']!= '') {
    $image=$post['image'];
    $id=$post['id'];
    print "<div><img width='600' height='280' src='/images/$image' alt='$image'></div>";

   ?>
<a href="/delete_pic.php?id=<?php echo $id;?>&image=<?php echo $image;?>" class="btn btn-danger" onclick="return confirm('Вы точно хотите удалить изображение?')">Удалить изображение</a>
<?php } ?>
</body>
</html>