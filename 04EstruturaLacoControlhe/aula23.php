<form>
    <input type="text" name="nome" placeholder="Digite o seu nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Enviar">
</form>

<?php
   
   if(isset($_GET)){
        foreach ($_GET as $key => $value) {
            echo "Nome do campo: " . $key. "<br>";
            echo "Valor do campo: " . $value;
            echo "<hr>";
        }
   }

    $meses = array(
        "01", "02", "03",
        "04", "05", "06",
        "07", "08", "09",
        "10", "11", "12"
    );
    foreach($meses as $index => $mes){
        //echo "O indice é: " .$index. "<br>";
        //echo "O mes é: " .$mes. "<br><br>";
    }
    
?>