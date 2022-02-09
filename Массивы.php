<?php


// key — Выбирает ключ из массива

key(array|object $array): int|string|null

$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// этот цикл выведет все ключи ассоциативного массива,
// значения которых равны "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array), "\n";
    }
    next($array);
}


// fruit1
// fruit4
// fruit5


// current() - Возвращает текущий элемент массива
// next() - Перемещает указатель массива вперёд на один элемент
// array_key_first() - Получает первый ключ массива




// Простой массив 

$array = array(
    "foo" => "bar",
    "bar" => "foo",
);


$array = [
    "foo" => "bar",
    "bar" => "foo",
];



// Многомерные массивы



$families = [["Tom", "Alice"], ["Bob", "Kate"]];
print_r($families[0]);  // Array ( [0] => Tom [1] => Alice )


// Ассоциативные массивы (используют вместо индексов ключи)

$user = ['age' => 42, 'name' => 'Иннокентий', 'fav_shows' => ["game of thrones", "american horror story", "walking dead"] ]


// foreach

$families = [["Tom", "Alice"], ["Bob", "Kate"], ["Sam", "Mary"]];
foreach ($families as $family)
{
    echo "<tr>";
    foreach ($family as $user)
    {
        echo "<td>$user</td>";
    }
    echo "</tr>";
}


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}