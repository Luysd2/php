<?php
//movendo arquivos
// usei o comado chmod -R 777 aula76 para dar permisão a pasta
date_default_timezone_set('America/Sao_Paulo'); 
//definindo o local da data e hora para usar o date()

$dir1 = "folder_01";
$dir2 = "folder_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";
 if(!file_exists($dir1 .DIRECTORY_SEPARATOR. $filename)){
     $file = fopen($dir1 .DIRECTORY_SEPARATOR. $filename, "w+");
     fwrite($file, date("d/m/Y H:i:s"));
     fclose($file);
 }
 rename(
    $dir1 .DIRECTORY_SEPARATOR. $filename, //origem do arquivo
    $dir2 .DIRECTORY_SEPARATOR. $filename //destino do arquivo
);

echo "Arquivo movido com sucesso";
 /*
o rename() remove o arquivo de lugar, pode renomear tbm, pode fazer as duas 
coisa de uma so vezvai depender de como vc usa, duvida olha na documentação

 A rename() função renomeia um arquivo ou diretório. Esta função 
 retorna TRUE em caso de sucesso, ou FALSE em caso de falha. 
 
 exemplo da documentação: rename("/tmp/tmp_file.txt", "/home/user/login/docs/my_file.txt");
 */

?>