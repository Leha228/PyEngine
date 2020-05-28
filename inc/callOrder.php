<?php
    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];

    mysqli_query($connect, "INSERT INTO `callorder` (`id`, `name`, `phone`) VALUES (NULL, '$name', '$phone')");
    $_SESSION['msg'] = 'Ожидайте, вам скоро позвонят!';

    header('Location: ../index.php#order');
?>