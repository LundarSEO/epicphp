<?php

$n = 34;

if ($n%2 == 0) {
echo 'Четное';
} else {
echo 'Нечетное';
}
echo '<br/>';
if ($n & 1 == 1) {
echo 'Нечетное';
} else {
echo 'Четное';
}