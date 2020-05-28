
<body>
<header class="header1">
    <div class="container header__container" >
        <nav class="header__nav">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="uslugi.php">Услуги</a></li>
                <li><a href="contacts.php">Контакты</a></li>
                <li><a href="o_comp.php">Документация</a></li>
                <?php 
                    if ($_SESSION['user']) {
                        echo '<li><a href="profile.php">Личный кабинет</a></li>';
                        echo '<li><a href="inc/logout.php">Выход</a></li>';
                    }
                    else {
                        echo '<li><a href="auth.php">Вход для клиентов</a></li>';
                    }
                ?>
            </ul>
        </nav>
        <div class="header__titled1" id="titled">
            <h2>МЕХТА</h2>
            <h5 class="white">Акционерное общество</h5>
        </div>
    </div>
</header>