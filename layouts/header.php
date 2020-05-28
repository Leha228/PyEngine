
<body>
<header class="header1">
    <div class="container header__container" style="display:flex; flex-wrap: wrap; align-items: center;">
        <div class="header__titled1" id="titled" style="flex-basis: 24%">
            <h2 style="font-size: 42px">МЕХТА</h2>
            <h5 class="white">Акционерное общество</h5>
        </div>
        <nav class="header__nav" style="flex-basis: 76%">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="uslugi.php">Услуги</a></li>
                <li><a href="contacts.php">Контакты</a></li>
                <li><a href="o_comp.php">Документация</a></li>
                <?php 
                    if (!empty($_SESSION['user'])) {
                        echo '<li><a href="profile.php">Личный кабинет</a></li>';
                        if ($_SESSION['user']['admin']) {
                            echo '<li><a href="admin/admin1.php">Админ панель</a></li>';
                        }
                        echo '<li><a href="inc/logout.php">Выход</a></li>';
                    }
                    else {
                        echo '<li><a href="auth.php">Вход для клиентов</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>