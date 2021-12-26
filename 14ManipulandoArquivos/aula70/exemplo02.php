<?php
//lendo arquivos de um diretorio

$imagens = scandir("Imagens"); //lista os arquivos de uma pasta
//scandir retorna um array
//var_dump($name);
//echo json_encode($name);

$data = array();

foreach ($imagens as $img) {
    if(!in_array($img, array(".", ".."))){
        $filename = "Imagens" .DIRECTORY_SEPARATOR. $img;
        //.DIRECTORY_SEPARATOR. no lugar da barra
        $info =pathinfo($filename); 
        //pathinfo serve para ver detalhes dos arquivos
        $info["size"] =filesize($filename); 
        /* adicionei mais uma chave no array($info['size'])  e usei o filesize para 
        mostar o tamanho em bytes do arquivo */
        $info["modificado"] = date("d/m/Y H:i:s", fileatime($filename));
        /* fileatime serve para ver a data de quanod ele foi modificado
        o date() serve para organizar a data e hora */
        $info["url"] = "http://localhost/aulasPhp/14ManipulandoArquivos/aula70/" . $filename;
        /* chave url para acessar o arquivo via url
        str_replace("\\", "/") para ajustar a barra se tiver invertida(como no windows)*/
         array_push($data, $info);
         //array_push serve para preencher um array 

         
    }
}
echo json_encode($data);




?>