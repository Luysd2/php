<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $cmd = escapeshellcmd($_POST["cmd"]);
    /*escapeshellcmd() escapa qualquer caractere em uma string que possa ser 
    utilizado para enganar um comando shell para executar comandos arbritários.

    Se eu deixar apenas assim  $cmd = $_POST["cmd"]; sem o escapeshellcmd(), qual quer
    pessoa com conhecimento vai poder executar comando cmd na minha aplicação, e assim
    vai ter controlhe sobre a minha aplicação, mas usando o escapeshellcmd(), ele vai 
    verificar, se for um comando cmd ele vai colocar ^ e assim vai transforma o comndo 
    em uma string, ajudando na minha segurança e na da minha aplicação
     */
    var_dump($cmd);
    $comando = system($cmd, $retorno);
}


?>
<form action="" method="POST">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>


