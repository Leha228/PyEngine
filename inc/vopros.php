<?php
    session_start();
    require_once 'connect.php';

    $theme = $_POST['theme'];
    $text = $_POST['text'];

    $id = $_SESSION['user']['id'];
    $email = $_SESSION['user']['email'];

    mysqli_query($connect, "INSERT INTO `vopros` (`id`, `email`, `theme`, `text`) VALUES (NULL, '$email', '$theme', '$text')");
    $_SESSION['msg'] = 'Вы успешно задали вопрос!';

    header('Location: ../profile.php');
?>