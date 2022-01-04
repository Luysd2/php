<?php
/*se so executar o arquivo vai mostar o erro, pq eu n passei o valor da variavel nome 
ela url*/
error_reporting(E_ALL & ~E_NOTICE); //aqui eu to pedindo para n mostrar o erro na tela
// mas o codigo ainda funciona, bastar colocar o valor via url (?nome=Luis)
$nome = $_GET["nome"];
echo $nome;

?>