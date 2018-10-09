<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Обучение у Марлина</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<?php include 'menu.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="/create.php" class="btn btn-success">Добавить запись</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($posts as $post): ?>

                    <tr>
                        <th scope="row"><?php echo $post['id'];?></th>
                        <td><a href="/show.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></td>
                        <td>
                            <a href="/edit.php?id=<?php echo $post['id'];?>" class="btn btn-warning">Изменить</a>

                            <a href="/delete.php?id=<?php echo $post['id'];?>&image=<?php echo $post['image'];?>" class="btn btn-danger" onclick="return confirm('Точно удалить?')">Удалить</a>
                        </td>
                    </tr>

                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>