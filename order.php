<?php
$name = $_GET['name'];
$number = $_GET['number'];
$text = $_GET['text'];
$email = 'katya.brotzman@list.ru';


$to = 'katya.brotzman@list.ru';

$subject = 'Новый заказ на звонок!';

// текст письма
$message = 'Имя: '.$name.'
Номер: '.$number;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Отправляем
mail($to, $subject, $message, implode("\r\n", $headers));



$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
   
    if (!empty($name) && !empty($number)) 
        {
          echo "<script type='text/javascript'>alert('Ваш аказ принят в обработку. Ожидайте ответа.');</script>";
        }


    $link = mysql_connect('localhost', 'root', '')
         or die('Соединение не выполнено');
                                        
        $iden_link = mysql_select_db('allclock', $link)
        or die('БД не выбрано');
                                        
        $result = mysql_query("INSERT INTO `allclock`.`Zvonki` (`Name`, `Phone`) VALUES ('$name', '$number')", $link);
        mysql_close($link);
}
?>