<?php
$dt = new DateTime();
$periodo = new DateInterval("P15D");
/* P = periodo 
15 = 15 dias q serao somados 
D= dias */
echo $dt -> format("d/m/Y H:i:s");
echo " data normal, sem adicionar os 15 dias.";
$dt -> add($periodo);
echo "<br>";
echo $dt -> format("d/m/Y H:i:s");
echo " data com os 15 dias adicionado.";

?>