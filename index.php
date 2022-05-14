<?php
require 'database/rb.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/all.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
<?php require_once('header.php'); ?>
<div class="banner">
    <img src="/public/img/banner.jpg" alt="">
    <div class="title">Риэлтерское агентство feat. Кирилл Витлев</div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="about-us-block">
                <div class="item">
                    <i class="fa-solid fa-house"></i>
                    <span>Мы поможем вам найти квартиру</span>
                </div>
                <div class="item">
                    <i class="fa-solid fa-file-invoice"></i>
                    <span>Удобный формат доступа к данным посредством форм и запросов.</span>
                </div>
                <div class="item">
                    <i class="fa-solid fa-lock"></i>
                    <span>Быстрый и надежный способ получение квартиры</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
