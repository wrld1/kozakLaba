<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send.php" method="post">
    <input type="text" name="login" placeholder="Введите логин" required>
    <input type="password" name="pass" placeholder="Введите пароль" required>
    <input type="email" name="email" placeholder="Введите email" required>
    <input type="tel" name="tel" placeholder="Введите телефон">

    <input type="submit" value = "Отправить данные">
    </form>
</body>
</html>
