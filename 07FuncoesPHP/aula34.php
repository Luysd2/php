<?php
$a = 10;

function trocaValor(&$a){
     /* Se eu usar o "&" antes da variavelele vai pegar o valor da variavel dentro 
     da memoria e assim vai mudar o seu valor msm fora da função*/

    $a += 50;
    return $a;
    /* o que acontece dentro da função, fica dentro da função */

}
echo trocaValor($a);
echo "<br>";

echo $a;

?>