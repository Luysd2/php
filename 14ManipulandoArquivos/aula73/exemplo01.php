<?php
$filename = "usuarios.csv";
if(file_exists($filename)){
    $file = fopen($filename, "r");
    $headers = explode(",", fgets($file));
    /*O PHP Explode é uma função do PHP que separa uma variável do tipo string em 
    um array. Diante disso, basicamente o que essa função faz é pegar uma 
    string (variável do tipo caracteres, texto) e separar elas, utilizando um separador*/
    //var_dump($headers);
    $data = array();
    while ($row = fgets($file)) {
        $rowData = explode(",", $row);
        $linha = array();
        for ($i=0; $i < count($headers); $i++) { 
            $linha[$headers[$i]] =$rowData[$i];
        }
        array_push($data, $linha);
    }
    fclose($file);
    echo json_encode($data);
}

?>