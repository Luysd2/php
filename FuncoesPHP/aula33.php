<?php
function ola($texto = "Mundo", $text = "Bom dia"){
    return "Olá $texto $text <br>";
}
echo ola();
echo ola("","Boa noite");
echo ola("Luis", "");

function x(){
    $argumentos = func_get_args();
    return $argumentos;
}
var_dump(x("ola", 10))


?>