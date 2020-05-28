<?php 
    session_start();
    require 'layouts/head.php'; 
?>

<div class="btn-main">
    <a href="index.php">Назад</a>
</div>

<section class="content content-two" id="order">
    <div class="container">
        <div class="content__box">
            <div class="order-card animated wow zoomIn">
                <h3 class="titled animated wow slideInLeft">Регистрация</h3>
                <form class="flat-form" action="inc/signup.php" method="post">
                    <div class="flat-form__input-box">
                        <i class="icon f24" style="color: #eaeaea"></i>
                        <input id="number" name="name" class="center" type="text" placeholder="Введите свой имя" required>
                    </div>
                    <div class="flat-form__input-box">
                        <i class="icon f24" style="color: #eaeaea"></i>
                        <input id="name" name="email" class="center" type="text" placeholder="Введите свой email" required>
                    </div>
                    <div class="flat-form__input-box">
                        <i class="icon f24" style="color: #eaeaea"></i>
                        <input id="number" name="password" class="center" type="password" placeholder="Введите свой пароль" required>
                    </div>
                    <div class="flat-form__input-box">
                        <i class="icon f24" style="color: #eaeaea"></i>
                        <input id="number" name="confirm_password" class="center" type="password" placeholder="повторите свой пароль" required>
                    </div>
                    <div class="center">
                        <br><a href="auth.php" style="color: #b8b8b8">Войти</a>
                        <input type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">
                        <p class="error_reg">
                            <?php
                                if ($_SESSION['msg']) {
                                    echo $_SESSION['msg'];
                                }
                                unset($_SESSION['msg']);
                            ?>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="graph graph_light-grey graph_horizontal-reverse-no-reverse-graph">
            <div class="animated wow fadeInUpBig" data-wow-delay=".3s"></div>
            <div class="animated wow fadeInUpBig" data-wow-delay=".6s"></div>
            <div class="animated wow fadeInUpBig" data-wow-delay=".9s"></div>
            <div class="animated wow fadeInUpBig" data-wow-delay="1.2s"></div>
        </div>
    </div>
</section>
