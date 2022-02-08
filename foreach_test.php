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



$meshok = [
    'Число' => 600,
    'Слово' => "Пример",
    'Массив' => ['ipad', 'iphone', 'ipod']
    ];
 
    


foreach($meshok as $key => $item) { // Перебор массива по ключу $key в элементе $item


   
    echo '$key - ' . $key ;
    echo ' $item - ' .  $item .  '<br>';


}


// $ar = array("H","E","L","L","0");
 
 
// foreach($ar as $s)  {
    
//     echo $s."<br>";
    
// }
 

exit()
?>

</body>
</html>