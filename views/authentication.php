<?php
require '../database/rb.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/all.min.css">
    <link rel="stylesheet" href="/public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/public/css/index.css">
</head>
<body>
<?php require_once('../header.php'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-6">
            <form action="controller/login.php" method="post" class="form login">
                <div class="item">
                    <label for="">Логин</label>
                    <input type="text" name="login" placeholder="Введите логин">
                </div>
                <div class="item">
                    <label for="">Пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль">
                </div>
                <button>Вход</button>
            </form>
        </div>
        <div class="col-6">
            <form action="controller/register.php" method="post" class="form register">
                <div class="item">
                    <label for="">Логин</label>
                    <input type="text" name="login" placeholder="Введите логин">
                </div>
                <div class="item">
                    <label for="">Почта</label>
                    <input type="email" name="email" placeholder="Введите почту">
                </div>
                <div class="item">
                    <label for="">Пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль">
                </div>
                <button>Зарегистрироваться</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
