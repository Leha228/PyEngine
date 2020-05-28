$(document).ready(function () {

    const blind = querySelector('#blind')
    blind.onclick = function(e) {
        e.preventDefault()
        console.log('asdf')
        document.body.style.fontSize = '2em'
    }


    if (window.innerWidth >= 1170) {
        var $header = $('#header');

        var $headerText = $header.find('.header__text');

        if (window.innerHeight >= 610) {
            var $cols = $('<div></div>');
            $cols.addClass('header__graph');

            for (var i = 0; i < 4; i++) {
                $col = $('<img class="animated wow fadeInUp" data-wow-delay="' + (i * 0.3) + 's" src="img/head-col-' + i + '.png">');
                $cols.append($col);
            }

            $header.append($cols);

            if (window.innerHeight - 502 < 230) $cols.css('bottom', window.innerHeight - 732 + 'px');
        }

        //-------------------------------------------------

        $orderButton = $('#order_button');

        $line1 = $('<div></div>');
        $line1.css({
            position: 'absolute',
            height: '100%',
            width: '1px',
            background: '#fff',
            top: '100%',
            right: $orderButton.width() + 40,
            zIndex: 999
        });


        $header.append($line1);

        $line1.animate({
            top: $orderButton.height() + 14 + 'px'
        }, 1000);

        //-----------------------------------------

        $line2 = $('<div></div>');
        $line2.css({
            position: 'absolute',
            height: '1px',
            width: '1000%',
            background: '#fff',
            top: $headerText.offset().top - $headerText.height() - 30,
            right: '100%',
            zIndex: 999
        });


        $header.append($line2);

        $line2.animate({
            right: $orderButton.width() + 40 + 'px'
        }, 1000);

        //---------------------------------------

        $line3 = $('<div></div>');
        $line3.css({
            position: 'absolute',
            height: $orderButton.offset().top,
            width: '1px',
            background: '#fff',
            top: -$orderButton.offset().top - 13 - $orderButton.offset().top - 13,
            right: $orderButton.width() + 40,
            zIndex: 999
        });


        $header.append($line3);

        $line3.animate({
            top: -$orderButton.offset().top - 13 + 'px'
        }, 1000);

        //-----------------------------------------

        $line4 = $('<div></div>');
        $line4.css({
            position: 'absolute',
            height: '1px',
            width: '1000%',
            background: '#fff',
            top: $('#titled').offset().top - $('#titled').height() / 2 + 30,
            left: '100%',
            zIndex: 999
        });


        $header.append($line4);

        $line4.animate({
            left: $line1.position().left + 'px'
        }, 1000);
    }
}).ready(function () {
    new WOW().init();

    $('.tickets').fadeOut();
    $($('.tickets').get(0)).fadeIn();

    $('.categories a').on('click', function (e) {
        e.preventDefault();

        $('.categories__active').removeClass('categories__active');
        $($('.categories li').get(+$(this).attr('data-category'))).addClass('categories__active');


        $('.tickets').hide();
        $($('.tickets').get(+$(this).attr('data-category'))).fadeIn();

        return false;
    });

    $('.tickets__ticket a').on('click', function(e) {
        e.preventDefault();
        var $self = $(this);

        var title = $self.attr('data-title');
        var text = $self.attr('data-text');

        var content = '<h3 class="alert__title">' + title + '</h3>' +
            '<p>' + text + '</p>';

        popUp(content);
        return false;
    });

    $('.news a[href="#"]').on('click', function(e) {
        e.preventDefault();

        var $new = $(this).parent().parent().parent();

        var title = $($new.find('h4').get(0)).html();
        var text = $($new.find('p').get(0)).attr('data-full-text');

        var content = '<h3 class="alert__title">' + title + '</h3>' +
            '<p>' + text + '</p>';

        popUp(content);

        return false;
    });


    $('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
        }
        return false; // выключаем стандартное действие
    });

    var $name = $('#name');
    var $number = $('#number');

    $('#order-button').on('click', function(e) {
        e.preventDefault();
        if (!$.trim($name.val()) || !$.trim($number.val()) || !$('#pol-input').get(0).checked) {
            var content = '<h3 class="alert__title">Ошибка!</h3>' +
                '<p>Укажите все данные и согласитесь с политикой конфиденциальности</p>';
            popUp(content);
            return false;
        }
        var content = '<h3 class="alert__title center">Секундочку...</h3>';
        var $alert = popUp(content);

        $.ajax({
            type: 'GET',
            url: 'order.php?name=' + $name.val() + '&number=' + $number.val(),
            success: function () {
                $alert.remove();
                content = '<h3 class="alert__title center">Успех =)</h3><p>Скоро мы вам позвоним.</p>';
                popUp(content);
            },
            error: function() {
                $alert.remove();
                content = '<h3 class="alert__title center">Что-то пошло не так =(</h3><p>Проверьте соединение с интернетом.</p>';
                popUp(content);
            }
        });

        return false;
    });

    $('#politic').on('click', function () {
        var content = '<h3 class="alert__title">Политика конфиденциальности</h3>' +
            '<p>Содержимое</p>';
        popUp(content);
    });
});

function popUp(content) {
    var $alert = $('<div class="alert"></div>');
    var $alertBox = $('<div class="alertBox">'+content+'</div>');
    $alert.append($alertBox);
    $alert.on('click', function() {
       $(this).remove();
    });
    $alertBox.addClass('animated');
    $alertBox.addClass('zoomIn');
    $('body').append($alert);

    return $alert;
}


