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
    

    function info($word) {
        echo "$word"
    }

   function math($x, $y) {
        $res = $x+$y;
    echo $red;
    }
math(4, 6)
    info("Info printed");



    function summary($arr) {
        $summa = 0;
        foreach($arr as $value) {
            $summa += $value;
        }

        return $summa;
    }
$list = [5, 4 ,6]
    echo summary($list)
    echo summary([8, 6 ,4])



    // Область видимости 

    function info() {
        global $x;
         $x = 0
    }
    $x = 10;
    info();
    echo $x // Вывод 0 


    //Вариант 1 
    function click() {
        $count = 0;
        $count++;
        echo $count;
    }
    click(); // 1
    click(); // 1
    click(); // 1

    // Вариант 2 
  function click() {
        static $count;
        $count++;
        echo $count;
    }
    click(); // 1
    click(); // 2
    click(); // 3


</body>
</html>

