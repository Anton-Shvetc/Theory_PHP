<?php


if ($a > $b) {
    echo "a больше b";
    $b = $a;


    if ($a > $b) {
        echo "a больше, чем b";
   } else {
        echo "a НЕ больше, чем b";
   }



   if ($a > $b) {
    echo "a больше, чем b";
} elseif ($a == $b) {
    echo "a равен b";
} else {
    echo "a меньше, чем b";
}

// Тернарные операторы 

$v = 1;

$r = (1 == $v) ? 'Yes' : 'No'; // $r is set to 'Yes'
$r = (3 == $v) ? 'Yes' : 'No'; // $r is set to 'No'

echo (1 == $v) ? 'Yes' : 'No'; // 'Yes' will be printed



// Упрощение 

if( $a == 1 || $a == 2 ) {
    if( $b == 3 || $b == 4 ) {
        if( $c == 5 || $ d == 6 ) {
             //Do something here.
        }
    }
}


if( ($a==1 || $a==2) && ($b==3 || $b==4) && ($c==5 || $c==6) ) {
    //do that something here.
}