<?php
require '../../database/rb.php';

if (R::findOne('users', 'name = ?', [$_POST['login']])) {
    header("Location: /");
} else {
    $users = R::dispense('users');
    $users->name = $_POST['login'];
    $users->email = $_POST['email'];
    $users->password = $_POST['password'];
    $users->position = '0';
    $id = R::store($users);

    $user = R::findOne('users', 'id = ?', [$id]);
    session_start();
    $_SESSION['user'] = $user;
    header("Location: /");
}