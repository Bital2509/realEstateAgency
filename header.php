<header>
    <div class="logo"><i class="fa-brands fa-accusoft"></i></div>
    <nav class="menu">
        <a href="/">Общая информация</a>
        <a href="/views/apartments.php">Доступные квартиры</a>
        <a href="">Контакты</a>
        <?php
        session_start();
        ?>
        <?php if ($_SESSION['user']) { ?>
            <?php if ($_SESSION['user']->position === '1') { ?>
                <a href="/views/admin.php">Админка</a>
                <a href="/views/controller/logout.php">Выход</a>
            <?php } else { ?>
                <a href="/views/controller/logout.php">Выход</a>
            <?php } ?>
        <?php } else { ?>
            <a href="/views/authentication.php">Аутентификация</a>
        <?php } ?>
    </nav>
</header>