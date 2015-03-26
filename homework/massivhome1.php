<?php

$odnogrupniki = [
[
	"name" => "Вася",
	"surname" => "Иванов",
	"city" => "Иваново",
	"email" => "ivanovvasya@mail.ru",
	"vk id" => "vk.com/id=24532432",
	"like" => "Любит шутить",
],
[
	"name" => "Петя",
	"surname" => "Сидоров",
	"city" => "Владимир",
	"email" => "sidevil91@mail.ru",
	"vk id" => "vk.com/id=24312332432",
	"like" => "Сатанизм",
],
[
	"name" => "Петя",
	"surname" => "Сидоров",
	"city" => "Владимир",
	"email" => "sidevil91@mail.ru",
	"vk id" => "vk.com/id=24312332432",
	"like" => "Сатанизм",
],
];

var_dump ($odnogrupniki);

foreach ($odnogrupniki as &$odnogrupnik) {
	list( $firstName, $lastName ) = explode( " ", $odnogrupnik );
	$odnogrupnik = "$lastName, $firstName";

}
unset( $odnogrupnik );

 var_dump($odnogrupniki);