<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $str = "Hello";
    echo "VAR: " . $str;
    

    srtlen($str); // Длина строки 
    trim(" some ") ; // Удаляет пробелы до и после строки
    strtoupper();// Перевод в верхний регистр
    strtoupper(trim(" some ")) // Сочитание функций 

    md5("qwerty") // функция жля хэширования паролей
    ?>
</body>
</html>