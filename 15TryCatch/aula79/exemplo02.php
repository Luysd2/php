<?php

use CodeIgniter\Throttle\Throttler;

function trataNome($name){
    if(!$name){
        throw new Exception("Nem um nome foi informado. ", 1);
        
    }
    echo ucfirst($name) . "<br>";
}

try {
    trataNome("Luis");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();
}finally{
    echo "<br>";
    echo "Executou o Try!";
}

?>