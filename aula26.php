<?php


$pessoa = array();
array_push($pessoa, array(
    'nome'=> 'Luis',
    'idade'=> '23'
));

array_push($pessoa, array(
    'nome'=> 'Sophia',
    'idade'=> '2'
));
//echo"<br>";
//print_r($pessoa)."<br>";
//echo"<br>";
//print_r($pessoa[0])."<br>";
//echo"<br>";
//print_r($pessoa[0]['nome'])."<br>";

echo json_encode($pessoa);
echo"<br>";
echo"<br>";

$jason = '[{"nome":"Luis","idade":"23"},{"nome":"Sophia","idade":"2"}]' ;
$data = json_decode($jason, true);
var_dump($data);



?>