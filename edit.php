<?php
include 'functions.php';
$db = include 'database/start.php';
$table = 'posts';
$id = $_GET['id'];
$post = $db->GetOne ($table, $id);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание записи</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<?php include 'menu.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/update.php?id=<?php echo($post ['id']); ?>" method="POST">

                <div class="form-group">
                    <label for="">Заголовок</label>
                    <input type="text" name="title" class="form-control" value="<?php echo($post ['title']); ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Изменить</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>