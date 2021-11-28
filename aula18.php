<?php
    echo "diferença entre aspas simples e dupla <br>";
    $nome = "Luis";
    $nome2 = 'Fernando';

    echo "teste $nome"; //com aspas duplas ele mostra o valor da variavel 
    echo "<br>";
    echo 'teste $nome'; /* com aspas simples ele n mostra o valor 
    da variavel, por que ele entende que é um texto */
    echo "<br> <br>";

    echo "Deixar as palavar maiusculo ou minusculo <br>";
    $nome = "luis";
    $nome2 = 'Fernando';

    echo strtoupper($nome); // função para deixar maiusculo
    echo "<br>";
    echo strtolower($nome); // função para deixa minusculo
    
    echo "<br> <br>";

    echo "Deixar as primeiras letras da palavar maiusculo ou minusculo <br>";
    echo ucwords($nome); // deixa maiuscula a primeira letra de cada palavra
    echo "<br>";
    echo ucfirst($nome);// deixa maiuscula a primeira letra do texto
    echo "<br> <br>";

    echo "Mudar letras de um palavra por outra letra ou numero ou simbolo <br>";
    $n = "Fernando";
    $n = str_replace("o", "0", $n); /* primeiro diz qual letra vbai ser escolhida, dpois 
    por qual numero, letra ou simbulo vai subistituir ela e por fim vc coloca a variavel 
    que contem a letra que vc quer mudar*/
    $n = str_replace("e", "3", $n);
    echo $n;
    echo "<br> <br>";

    echo "Procurar uma palavra ou outra coisa dentro do texto/frase <br>";
    $frase = "o ceu não é verde";
    $q = strpos($frase, "não");/*Primeiro vc colocar a variavel e depois a palavra q 
    vc esta procurando*/
    var_dump($q);// aqui ele vai dixer em q possição ela esta 
    echo"<br>";
    $t = substr($frase, 0, $q);
    /*o substr() é para pegar uma certa frase/ informação ate determinado ponto.
    aqui ele ta pegando o o pedaço da frase q esta na varialvel $frase do inicio
    (posição 0)  ate chegar na palavra "não" que esta na posição 11 que o var_dump 
    me mostrou*/
    var_dump($t);
    echo"<br>";
    $teste = substr($frase, $q+ 4, strlen($frase));/*Aqui é para pegar o restante 
    da frase depois da palavra "não" 
    $q + 4 é para ele começar depois da palavra(não tem 3 letras e como tem um espaço 
    ele tem q ser somado com mais 4(3 das letras e 1 do espaço)) e aqui
    strlen($frase) ele ta contando a frase toda eu poderia contar mais fazendo assim 
    fica mais partico*/
    echo $teste;


?>