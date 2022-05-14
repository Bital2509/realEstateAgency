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
<div class="banner">
    <img src="/public/img/banner.jpg" alt="">
    <div class="title">Риэлтерское агентство feat. Кирилл Витлев</div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <table class="iksweb">
                <thead>
                <tr>
                    <td>Название</td>
                    <td>Адрес</td>
                    <td>Стоимость</td>
                    <td>Площадь</td>
                    <td>Кол. комнат</td>
                </tr>
                </thead>
                <tbody>
                <?php
                $apartments = R::find('apartments');

                foreach ($apartments as $item) {
                    ?>
                    <tr>
                        <td><?php echo $item->name ?></td>
                        <td><?php echo $item->address ?></td>
                        <td><?php echo $item->prise ?></td>
                        <td><?php echo $item->square ?></td>
                        <td><?php echo $item->count ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
