<?php
//baixando arquivos com o file_get_contents
// tive q da permisão para a pasta para baixar arquivo comando usado chmod -R 777 aula75
$link = "https://www.google.com.br/logos/doodles/2021/new-years-eve-2021-6753651837109170.2-ladc.gif";

$content = file_get_contents($link);
//var_dump($content);

$parse = parse_url($link);

//var_dump($parse);
$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>" >
<!--essa tag esta exibindo o arquivo que foi baixado no diretorio-->