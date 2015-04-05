<?php
//Даны целые числа a, b и c. Нужно вывести их на экран по возрастанию.

//Кодировочка
mb_internal_encoding("UTF-8");

//создать переменные

$a = 3;

$b = 7;

$c = -13;

// создать условие и вывеси результат


if ($a > $b && $b > $c) {

echo $c .' '. $b . ' ' . $a;

} elseif ($a > $c && $c > $b) {

echo $b .' '. $c . ' ' . $a;

} elseif ($b > $a && $a > $c) {

echo $c .' '. $a . ' ' . $b;

} elseif ($b > $c && $c > $a) {

echo $a .' '. $c . ' ' . $b;

} elseif ($c > $a && $a > $b) {

echo $b .' '. $a . ' ' . $c;

} else {

echo $a .' '. $b . ' ' . $c;

}
