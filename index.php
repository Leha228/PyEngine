<?php 

    require 'layouts/head.php';
?>
<body>
    <div class="contenters">
    <header class="header">
        <div class="container header__container" id="header">
            <nav class="header__nav">
                <ul>
                    <li><a class="go_to" href="#about">О нас</a></li>
                    <li><a href="uslugi.php">Услуги</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                    <li><a href="o_comp.php">Документация</a></li>
                    <?php 
                        if (!empty($_SESSION['user'])) {
                            echo '<li><a href="profile.php">Личный кабинет</a></li>';
                        }
                        else {
                            echo '<li><a href="auth.php">Вход для клиентов</a></li>';
                        }
                    ?>
                </ul>
                <a id="order_button" class="go_to header__order" href="#order">Заказать звонок</a>
            </nav>
            <div class="header__titled" id="titled">
                <h1>МЕХТА</h1>
                <h3 class="white">Акционерное общество</h3>
            </div>
            <p class="header__text">
                Наши возможности для вашего успешного бизнеса!
            </p>
        </div>
    </header>
<section class="content">
    <div class="container">
        <div class="graph graph_vertical-reverse graph_grey">
            <div class="animated wow fadeInDownBig" data-wow-delay=".3s"></div>
            <div class="animated wow fadeInDownBig" data-wow-delay=".6s"></div>
            <div class="animated wow fadeInDownBig" data-wow-delay=".9s"></div>
            <div class="animated wow fadeInDownBig" data-wow-delay="1.2s"></div>
        </div>
        <div class="content__box center-center">
            <div class="center animated wow fadeInUpBig" style="max-width: 620px;">
                <p><i>Во-первых, не делай ничего без причины и цели. <br> 
                Во-вторых, не делай ничего, что бы не клонилось на пользу общества.</i></p>
                <hr style="width: 45px; margin: 30px auto">
                <p>- Марк Аврелий -</p>
            </div>
        </div>
    </div>
</section>
        <section class="content content_grey" id="about">
            <div class="container">
                <div class="content__box">
                    <h3 class="titled animated wow slideInLeft">О нас</h3>
                    <hr class="animated wow slideInRight">
                    <div class="cols" style="align-items: center">
                        <p class="about-text">Акционерное общество «МЕХТА» предлагает вашему вниманию основные виды продукции стенды тестирования узлов УЭЦН, технологическое оборудование для ремонта и обслуживания УЭЦН кабельные удлинители и кабельные линии с рабочей температурой от -40 °C до +200 °C с различными вариантами узла стыковки муфты кабельного ввода с головкой электродвигателя.</p>
                        <img src="img/about.png" alt="" class="about-img">
                    </div>
                </div>
                <div class="graph graph_horizontal-reverse graph_white">
                    <div class="animated wow fadeInUpBig" data-wow-delay="1.2s"></div>
                    <div class="animated wow fadeInUpBig" data-wow-delay=".9s"></div>
                    <div class="animated wow fadeInUpBig" data-wow-delay=".6s"></div>
                    <div class="animated wow fadeInUpBig" data-wow-delay=".3s"></div>
                </div>
            </div>
        </section>
        <section class="content" id="news">
            <div class="container">
                <div class="content__box content__box_not-graph news-head">
                    <h3 class="titled animated wow slideInLeft">Мехта - это...</h3>
                    <hr class="animated wow slideInRight">
                    <div class="news-list">
                        <article class="news animated wow fadeInRightBig">
                            <p align="center"><img src="img/news/1.jpg" alt="" ></p>
                            <div class="news__content">
                                <p align="center" class="about-text">Постоянно расширяемый перечень продукции, по которой оказываются сервисные услуги</p>
                            </div>
                        </article>
                        <article class="news animated wow fadeInRightBig" data-wow-delay=".15s">
                            <p align="center"><img src="img/news/2.jpg" alt=""></p>
                            <div class="news__content">
                                <p align="center" class="about-text">Отлаженный механизм взаимодействия с производителями продукции</p>
                            </div>
                        </article>
                        <article class="news animated wow fadeInRightBig" data-wow-delay=".3s">
                            <p align="center"><img src="img/news/3.jpg" alt=""></p>
                            <div class="news__content">
                                <p align="center" class="about-text">Гарантия высокого качества и оперативности сервиса</p>
                            </div>
                        </article>
                    </div>
                    <hr style="width: 130px;">
                </div>
            </div>
        </section>
        <section class="content" id="order">
            <div class="container">
                <div class="content__box">
                    <div class="order-card animated wow zoomIn">
                        <a href="tel:89228644256" class="order-card__call animated wow zoomIn" data-wow-delay=".6s"></a>
                        <h3 class="titled animated wow slideInLeft">Заказать<br>звонок</h3>
                        <form action="#" class="flat-form">
                            <div class="flat-form__input-box">
                                <i class="icon f24" style="color: #eaeaea"></i>
                                <input id="name" class="center" type="text" placeholder="Введите свое имя" required>
                            </div>
                            <div class="flat-form__input-box">
                                <i class="icon f24" style="color: #eaeaea"></i>
                                <input id="number" class="center" type="text" placeholder="Введите свой номер" required>
                            </div>
                            <div class="center">
                                <input type="checkbox" id="pol-input"> <span class="upper f12" id="politic">Политика конфиденциальности</span>
                                <button id="order-button">Заказать</button>
                            </div>
                        </form>
            <hr style="width: 130px;">
        </div>
    </div>
</section>
    </div>
<?php 
    require 'layouts/blind.php';
    require 'layouts/footer.php';
?>
</body>
</html>