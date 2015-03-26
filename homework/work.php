<?php

$arr = ['apple', 'strawberry', 'pie', 'cherry', 'mmm',
'sandwich'];
while (list($key, $value) = each($arr)) {
if (!($key % 2)) { // skip odd members
continue;
}
echo $value;
}