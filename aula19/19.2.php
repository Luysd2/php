<?php
//include "19.php";
/*O include vai verificar se o arquivo existe e esta funcionando, se n
tiver ele ele vai pular essa parte da linha do codigo e vai tentar proseguir*/
require "19.php";
/*O require vai te obrigar que o arquivo exista e esteja funcionando para que ele
possa seguir com o codigo, se n tiver funcionando o todo codigo vai parar 
quando chegar naquela linha */
require_once "19.php";
require_once "19.php";
/*O require_once é para quando vc importa mais de uma vez o arquivo, para evitar erro,
se o arquivo ja foi importado uma vez, n vai ter necessidade de importa novamente */

$resultado = somar(30, 20);
echo $resultado;
?>