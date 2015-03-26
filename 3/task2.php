<?php

$text = "asdf alsdjkqkj2198   j фыдвалофывайцук фывафыв asdf";
$words = explode(' ', $text);

// foreach ($words as $key => $word) {
//     if (empty($word)) {
//         unset($words[$key]);
//     }
// }

var_dump($words);
$words = array_filter($words);
var_dump($words);
$total = count($words);
var_dump($total);
$totalEven = 0;
foreach($words as $word) {
	$wordLength = mb_strlen($word);
	if ($wordLength % 2 == 0) {
		$totalEven++;
	}
}

echo "Число слов с четным количеством символов: " . $totalEven;