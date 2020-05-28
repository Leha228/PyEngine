<?php 
    require 'layouts/head.php';
?>

<div class="btn-main">
    <a href="index.php">Назад</a>
</div>

<section class="content content-two" id="order">
    <div class="container">
        <div class="content__box">
            <div class="order-card animated wow zoomIn">
                <h3 class="titled animated wow slideInLeft">Авторизация</h3>
                <form action="inc/signin.php" method="post" class="flat-form">
                    <div class="flat-form__input-box">
                        <i class="icon f24" style="color: #eaeaea"></i>
                        <input id="name" name='email' class="center" type="text" placeholder="Введите свой email" required>
                    </div>
                    <div class="flat-form__input-box">
                        <i class="icon f24" style="color: #eaeaea"></i>
                        <input id="number" name='password' class="center" type="password" placeholder="Введите свой пароль" required>
                    </div>
                    <div class="center">
                        <br><a href="reg.php" style="color: #b8b8b8">Зарегистрироваться</a>
                        <input type="submit" value="ВОЙТИ">
                        <p class="error_reg">
                            <?php
                                if (!empty($_SESSION['msg'])) {
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

