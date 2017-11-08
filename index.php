<?php

echo "<i>Hello World</i>";
$string  = "Hello";
$number = 156;
$real = 15.54;
$boolean = true;
$array = ['lt','en', 'ru', $string, $number];
$object = (object)[
		"key" => "value-1",
		"key2" => "value-2",
		"key3" => "value-3"
];


// var_dump($string);
// var_dump($number);
// var_dump($real);
// var_dump($boolean);

var_dump($array[0]);
var_dump($object->key);

?>