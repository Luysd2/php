<?php
echo date("d/m/Y H:i:s");
echo "<br>";
$st =  strtotime("now"); // da para usar varias expresoes no lugar de now, basta 
//escolher na documentação 
echo date("l, d/m/Y", $st);
?>