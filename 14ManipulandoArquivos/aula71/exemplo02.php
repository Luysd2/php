<?php
require_once("config.php");
$sql = new Sql();

$usuario = $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");

//print_r($usuario);
//echo json_encode($usuario);

$header = array();
foreach ($usuario[0] as $key => $value) {
    array_push($header, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(", ", $header). "\r\n");
/*fwrite cria o arquivo
 implode() espera dois parametros, o separador(eu usei a ',' mais poderia ser outro) 
e o array que ele vai separar
 */

 foreach ($usuario as $row) { // foreach da linha do banco
     $data = array();
     foreach ($row as $key => $value) { //foreach de coluna do banco
         array_push($data, $value);
     }
     fwrite($file, implode(", ", $data) . "\r\n");
 }

 fclose($file);
?>