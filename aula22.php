<?php
    echo "incremento <br>";
    for ($i=0; $i <=10; $i++) { 
        echo $i . "<br>";
    }
    echo "<br>";

    echo "usando o continue <br>";
    for ($i=0; $i <=10; $i++) { 
        if($i >= 3 && $i <= 7) continue; /* aqui é pra ele n pegar os numeros maiores ou 
        iguais a 3 e n pegar os numeros menores ou igual a 7*/
        if($i ==9) break; //ele vai parar quando chegar em 9
        echo $i . "<br>";
    }

    echo "<br>";

    echo "decremento <br>";
    for ($i=10; $i >=0; $i--) { 
        echo $i . "<br>";
    }

    echo "<br>";

    echo "For com loope infinito <br>";
    for ($i=0; $i <=10; $i--) { 
        echo $i . "<br>";
        if($i == - 100) break;
    }

    echo "<br>";

    echo "For com a data(ano) <br>";
    echo "<select>";
    for ($i= date("Y"); $i >=date("Y")-100; $i--) { 
        echo '<option value= "'.$i.'">' .$i.'</opition>';
        
    }
    echo "</select>";

?>