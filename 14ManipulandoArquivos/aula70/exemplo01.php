<?php
//criando um diretortio
$name = "Imagens";
if(!is_dir($name)){
    //is_dir verifica se o diretorio exixte
    mkdir($name); //cria o diretorio
    echo "Diretorio $name criado com sucesso";
}else{
    rmdir($name);//apaga um diretorio
    echo "Diretorio apagado: $name";
}


?>