<?php
$text = file_get_contents('hipster.txt');
var_dump($text);
$abzac = explode("\n\n", $text);
var_dump($text);











file_put_contents("result.txt", $text);