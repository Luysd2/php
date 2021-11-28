<?php
 function soma(int ...$valores):float{
     /*colocando o :float ele faz a comversao do valor, dentro da da função soma 
     os valores sao interos(int) 
    */
    return array_sum($valores);
}
 echo var_dump(soma(2, 2));
 echo "<br>";

 echo soma(30, 20);
 echo "<br>";

 echo soma(1.3, 2.8);
 echo "<br>";

?>