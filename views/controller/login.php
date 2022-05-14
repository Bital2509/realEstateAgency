<?php
require '../../database/rb.php';
$users = R::find('users');;
if (R::findOne('users', 'name = ?', [$_POST['login']])) {
    $user = R::findOne('users', 'name = ?', [$_POST['login']]);
    if ($user->password === $_POST['password']) {
        session_start();
        $_SESSION['user'] = $user;
        header("Location: /");
    } else {
        echo 'Не верный пароль';
    }
} else {
    echo 'Неверный логин';
}