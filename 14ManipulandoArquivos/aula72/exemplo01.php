<?php
//apagando arquivos 
$file = fopen("teste.txt", "w+");
fwrite($file, "arquivo teste");

fclose($file);

unlink("teste.txt"); // apagar um arquivo

echo "arquivo apagado";
?>