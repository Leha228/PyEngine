<?php 
    require 'layouts/head.php';
    if (empty($_SESSION['user'])) {
        die("Not Found");
    }
    require 'layouts/header.php';
?>
    <section class="content content_grey" id="about">
    <div class="container">
        <div class="content__box">
                <h2 align="center">Личный кабинет</h2><br>

                <?php 
                    if ($_SESSION['user']['admin']) {
                        echo "<a href='admin/admin1.php'>Админка</a>";
                    }
                ?>
                <div class="order-card animated wow zoomIn">
                        <h3 class="titled animated wow slideInLeft">Задать вопрос</h3>
                        <form action="inc/vopros.php" method="post" class="flat-form">
                            <div class="flat-form__input-box">
                                <i class="icon f24" style="color: #eaeaea"></i>
                                <input id="name" name='theme' class="center" type="text" placeholder="Введите тему вопроса" required>
                            </div>
                            <div class="flat-form__input-box">
                                <textarea rows="15" id="number" name='text' class="textarea" type="messeag" placeholder="Введите вопрос" required></textarea>
                            </div>
                            <div class="center">
                                <input type="submit" value="ОТПРАВИТЬ">
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
                <hr style="width: 45px; margin: 30px auto">
                <div class="container">
                <div class="content__box content__box_not-graph">
                        <div>
                            <br>
                            <h5 class="upper animated wow slideInLeft"><?php $_SESSION['user']['name']?></h5><br>
                            <br>
                            <p class="animated wow slideInLeft"><?php $_SESSION['user']['email']?></p>
                            <br>
                        </div>
                </div>
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
<?php 
    require 'layouts/footer.php';
?>