<form action="#" method="POST" enctype="multipart/form-data">
<!--enctype="multipart/form-data" converte tudo dentro da tag form para binario -->
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>

</form>
<?php
date_default_timezone_set('America/Sao_Paulo'); 
//definindo o local da data e hora para usar o date()
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = $_FILES["fileUpload"];
    //$_FILES serve para quando formos fazer upload de arquivos
    if($file["error"]){
        throw new Exception("Error: " . $file["error"]);
    }
    $dirUpload = "uploads";
    if(!is_dir($dirUpload)){
        mkdir($dirUpload); 
        /* para criar a pasta, eu tenho q da permisão na pasta, indo ate a pasta 
        14ManipulandoArquivos e executando o comando chmod -R 777 aula74 */
    }
    if (move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $file["name"])) {
        echo "upload realizado com sucesso " . date("d/m/Y H:i:s");
    }else{
        throw new Exception("Não foi possivel fazer upload " .date("d/m/Y H:i:s"));
        
    }
}

?>