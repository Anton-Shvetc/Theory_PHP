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
  

  // Строковый массив 
  $array = array (12, 13, 54, 23, 55)



  echo count($array); // Выведет количество элементов - 5
  sort($array); 
  print_r ($array); // Функция вывода для разработчиков 


// Ассоциативный массив 
  array ("123" => 123) // "Ключ" => значение
  asort($array); // сортировка с сохранением "Ключ" => значение
  arsort($array); // сортировка по убыванию
  print_r ($array);





  $meshok = [
    'Число' => 600,
    'Слово' => "Пример",
    'Массив' => ['ipad', 'iphone', 'ipod']
    ];
 
    
 for ($i =0; i < count($meshok['Массив']); $i++) {
      var_dump($meshok['Массив'][$i]) . '<br>';

 }

foreach($meshok as $key => $item) { // Перебор массива по ключу $key в элементе $item

    echo '$key - ';
    var_dump($key) . '<br>';

       echo '$item - ';
    var_dump($item) . '<br>';


}






  ?>




</body>
</html>


