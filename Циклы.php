<?php

// for 
/* пример 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* пример 2 */
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* пример 3 */
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* пример 4 */
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);


// key 

$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// этот цикл выведет все ключи ассоциативного массива,
// значения которых равны "apple"
while ($fruit_name = current($array)) { // current возвращение текущего элемента
    if ($fruit_name == 'apple') {
        echo key($array), "\n";
    }
    next($array);
}

// Результат 

// fruit1
// fruit4
// fruit5







// foreach

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element




// foreach (массив as $ключ=>$значение)
// команды;

$names["Иванов"] = "Андрей";
$names["Петров"] = "Борис";
$names["Волков"] = "Сергей";
$names["Макаров"] = "Федор";
foreach ($names as $key => $value) {
echo "<b>$value $key</b><br>";
}

// Андрей Иванов
// Борис Петров
// Сергей Волков
// Федор Макаров



// foreach (массив as $значение)
// команды;

$names[] = "Андрей";
$names[] = "Борис";
$names[] = "Сергей";
$names[] = "Федор";
foreach ($names as $value) {
echo "<b>$value</b><br>";
}


// break 

$x=0;
while ($x++<10) {
if ($x==3) break;
echo "<b>Итерация $x</b><br>";
}
// Когда $x равен 3, цикл прерывается