<?php
//manipulando arquivos 

$filename = fopen("log.txt", "w+");
/* o fopen() espera sempre dois parametros, 1º o nome do arquivo e o 2º o tipo de ação
as ações ja sao definidas, estao no manual do fopen 
a+ ele so escreve no arquivo, se atualizar 3 vezes ele coloca 3 linhas
w+ ele sobre escreve o arquivo, se atualizar 3 vezes ele vai sempre sobrescrever*/
fwrite($filename, "Olá, a data de hoje é: ".date("d/m/Y H:i:s") ."\r\n");
/* o fwrite() tbm espera dois parametros, o 1º é as informaçoes do arquivo que vai 
ser criado e o 1º é o que vai ser escrito no arquivo */
fclose($filename);
//fecha e executa as ações acima

echo "Arquivo criado";

?>