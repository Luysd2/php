<?php
    $x = "Olá Mundo";

<<<<<<< HEAD
    echo $x."<br/>";
    var_dump($x);
=======
echo $x."<br/>";
var_dump($x);

unset($x); 
//exit;
echo $x;
>>>>>>> d5708cec2e6f1e7eb8357ee0273a7193934bb7d4

    unset($x); // essa funcao zera o valor da variavel na memoria 
    //exit; // serve para o programa parar aqui 
    //echo $x;
    $data = new DateTime();

    var_dump($data);

?>
