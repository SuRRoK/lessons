<?php
session_start();
//$_SESSION['name']='';

if ($_GET['msg']=='success')
{
    echo "<h3>Вы успешно создали учетную запись и можете войти в систему!</h3>";
}
if ($_GET['msg']=='fail')
{
    echo "<h3>Введены неверные данные, исправьте и попробуйте снова</h3>";
}
if ($_GET['msg']=='fail_username')
{
    echo "<h3>Неверный логин!</h3>";
}
if ($_GET['msg']=='fail_password')
{
    echo "<h3>Неверный пароль!</h3>";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создайте учетку или войдите под существующей</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<?php include 'menu.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-md-7 offset-md-1">
            <form method="POST"  action="/create_user.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Введите данные для регистрации:</label>  <br>

                            <tr>
                                <th scope="row">Введите логин</th>
                                <td> <input type="text" name="login" class="form-control"> </td>
                            </tr>
                            <tr>
                                <th scope="row">Как к Вам обращиться?</th>
                                <td> <input type="text" name="name" class="form-control"> </td>
                            </tr>
                            <tr>
                                <th scope="row">Введите адрес электронной почты</th>
                                <td> <input type="text" name="email" class="form-control"> </td>
                            </tr>
                            <tr>
                                <th scope="row">Введите пароль</th>
                                <td> <input type="password" name="password" class="form-control"> </td>
                            </tr>
                            <tr>
                                <th scope="row">Повторите пароль</th>
                                <td> <input type="password" name="r_password" class="form-control"> </td>
                            </tr>
                            <tr>
                                <th scope="row">Установите аватар: </th>
                                <td><input type="file" name="image"> </td>
                            </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>
                            <div class="form-group">
                                <button class="btn btn-success">Создать учетку</button>
                            </div>
                        </td>
                    </tr>

                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7 offset-md-1">
            <form method="POST"  action="/check_user.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Если у Вас есть учетная запись:</label>  <br>

                    <tr>
                        <th scope="row">Введите логин</th>
                        <td> <input type="text" name="login" class="form-control"> </td>
                    </tr>
                    <tr>
                        <th scope="row">Введите пароль</th>
                        <td> <input type="password" name="password" class="form-control"> </td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td>
                            <div class="form-group">
                                <button class="btn btn-success">Войти</button>
                            </div>
                        </td>
                    </tr>

                </div>
            </form>
        </div>
    </div>
</div>



</body>
</html>
