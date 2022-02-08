<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

// Создание онстанты
define(MY_AGE, 23);

echo 'Мой возраст: ' . MY_AGE . '<br>';


// Переменные
$number = 12;
$num = 1443;

echo 'Переменная: ' . $number . $num;


// Неинициализированные переменные 

$null = NULL; // заданная null
$empty = ""; // заданная и пустая
$true = true; // заданная и не пустая
unset($undefined); // не инициализированная/не заданная (unset() тоже, что ее и не было)



?>
</body>
</html>


