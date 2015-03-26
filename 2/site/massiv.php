<?php

$products = [
[
'title' => 'Плюшевый человек',
'category' => '18+',
'description' => 'Экологически гигиеничный образец',
'price' => '$100',
'country' => 'Russia',
],
[
'title' => 'Хомяк неговорящий по-эстонски',
'category' => '16+',
'description' => 'Жжжживотное',
'price' => '$150',
'country' => 'Russia',
],
[
'title' => 'Сомневающийся дед',
'category' => '75+',
'description' => 'Не ходит за пенсией',
'price' => '$0',
'country' => 'Russia',
],
[
'title' => 'Галлюцинация Шреденгера',
'category' => '18+',
'description' => 'Она вроде бы и есть, а вроде бы и нет',
'price' => '$5000',
'country' => 'Unknown',
],

];

var_dump($products);

foreach ($products as $key => $product) {
    $products[$key]['description'] = $product['price'];
   $products[$key]['price'] = $product['title'];
    $products[$key]['title'] = $product['description'];
}



 var_dump($products);