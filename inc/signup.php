<?php
    session_start();

    require_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $null = 0;

    if ($password === $confirm_password) {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `password`,`admin`) VALUES (NULL, '$name', '$email', '$password','$null')");
        
        $_SESSION['msg'] = 'Вы успешно зарегистрировались!';
        header('Location: ../auth.php');

    }
    else {
        $_SESSION['msg'] = 'Пароли не совпадают!';
        header('Location: ../reg.php');
    }

?>