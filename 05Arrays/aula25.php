<?php
$fruta = array("laranja, manga, melancia");
print_r($fruta);

echo"<br>";

$caros[0][0] = "gol";
$caros[0][1] = "estrada";
$caros[0][2] = "camaro";
$caros[0][3] = "gip";

$caros[1][0] = "ford";
$caros[1][1] = "hilux";
$caros[1][2] = "f250";
$caros[1][3] = "d20";

echo"<br>";

echo $caros [0][1];
echo"<br>";
echo end($caros[1]);

echo"<br>";

$pessoa = array();
array_push($pessoa, array(
    'nome'=> 'Luis',
    'idade'=> '23'
));

array_push($pessoa, array(
    'nome'=> 'Sophia',
    'idade'=> '2'
));
echo"<br>";
print_r($pessoa)."<br>";
echo"<br>";
print_r($pessoa[0])."<br>";
echo"<br>";
print_r($pessoa[0]['nome'])."<br>";


?>