<?php
//usando o Cookies
//Criando o Cookie
$data = array(
    "Nome" => "Luis",
    "Sobrenome" => "Sousa"
);

setcookie("NOME_DO_COOKIES", json_encode($data), time() + 3600);
//ele espera 3 paramentro, o nome dele, o que ele vai armazenar e o tempo de duração dele
//time() + 3600 é o tempo atual + a soma de uma hora em segundos 

echo "ok";


?>