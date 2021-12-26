<?php
    $minhaIdade = 23;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if($minhaIdade <= $idadeCrianca){
        echo "Criança";
    }else if($minhaIdade <= $idadeMaior){
        echo "Adolecente";
    }
    else if($minhaIdade <= $idadeMelhor){
        echo "Adulto";
    } else{
        echo "é um idoso";
    }
    echo "<br>";
    //outra forma para um ondição simples

    echo ($minhaIdade < $idadeMaior)? "Menor de idade" : "Maior de idade";
    /*O '?' é como se fosse o if e o ':' é como se fosse o else*/
?>