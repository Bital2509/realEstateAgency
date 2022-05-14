<?php
require '../database/rb.php';
$apartments = R::findOne('apartments','id = ?', [$_GET['id']]);
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
        <div class="col-12">
            <form action="controller/edit.php" method="post" class="form">
                <div class="item" style="display: none">
                    <input type="text" name="id" value="<?php echo $apartments->id; ?>">
                </div>
                <div class="item">
                    <label for="">Название</label>
                    <input type="text" name="name" value="<?php echo $apartments->name; ?>">
                </div>
                <div class="item">
                    <label for="">Адрес</label>
                    <input type="text" name="address" value="<?php echo $apartments->address; ?>">
                </div>
                <div class="item">
                    <label for="">Стоимость</label>
                    <input type="text" name="prise" value="<?php echo $apartments->prise; ?>">
                </div>
                <div class="item">
                    <label for="">Площадь</label>
                    <input type="text" name="square" value="<?php echo $apartments->square; ?>">
                </div>
                <div class="item">
                    <label for="">Кол. комнат</label>
                    <input type="text" name="count" value="<?php echo $apartments->count; ?>">
                </div>
                <button>Добавить</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
