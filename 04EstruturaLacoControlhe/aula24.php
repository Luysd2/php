<?php
$x = 0;
while ($x <= 10) {
    $x ++;
    //echo $x . "<br>";
    /*lembando q o while verifica primeiro a condição e depois que roda o restante*/
}

$total = 100;
$desconto = 0.9;
do {
    $total *= $desconto;
}while($total > 100);
echo $total. "<br>";
/*lembando q o do while roda pelo menos uma vez, ele roda 
primeiro depois verifica a condição*/

?>