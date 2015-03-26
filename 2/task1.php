<?php

$input = 'Товар';
$input2 = 'Описание';
$input3 = 'Категория';
$input4 = 'Цена';

if (isset($_GET['title'])) {
 $input = $_GET['title'];
 echo htmlspecialchars($input);
}else {
echo htmlspecialchars($input);	
}
echo '<br/>';
if (isset($_GET['description'])) {
 $input2 = $_GET['description'];
 echo htmlspecialchars($input2);
}else {
echo htmlspecialchars($input2);	
}
echo '<br/>';
if (isset($_GET['category'])) {
 $input3 = $_GET['category'];
 echo htmlspecialchars($input3);
}else {
echo htmlspecialchars($input3);	
}
echo '<br/>';
if (isset($_GET['price'])) {
 $input4 = $_GET['price'];
 echo htmlspecialchars($input4);
}else {
echo htmlspecialchars($input4);	
}