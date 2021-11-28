<?php
    // Conhecendo os Operadores do PHP
    // resto da divisão 

    $a = 10;
    $b = 2;

    echo $a % $b; // resto da divisão

    echo "<br>";

    echo pow($a, $b); //Exponenciação

    echo "<br>";

    echo $a <=> $b; 
    /* se $a for maior q $b, ele vai me trazer 1, se for igual ele traz 0
    se fro menor ele traz -1
    */
    echo "<br>";
    $q = null;
    $w = 10;
    echo $q ?? $w; // se n encontra o valor do $q me traz o valor do $w;
    echo "<br>";

    // operador de incremento e de decremento

    echo "incremento e de decremento";
    echo "<br> incremento"; 
    echo "<br>"; 
    $a = 10;
    echo $a++; 
    echo "<br>"; 
    echo $a;

    echo "<br>"; // mesma funcao escrtita de forma diferente 
    $a = 10;
    echo ++$a;

    echo "<br> decremento";
    echo "<br>"; 

    $a = 10;
    echo $a--; 
    echo "<br>"; 
    echo $a;

    echo "<br>"; // mesma funcao escrtita de forma diferente 
    $a = 10;
    echo --$a;




?>
