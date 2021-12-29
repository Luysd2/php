<?php
// teste do base64
// $str = "teste";
// $cod =  base64_encode($str);
// echo $cod;
// echo "\n";
// $dCod = base64_decode($cod);
// echo $dCod;


$filename = "d.jpeg";
$base64 = base64_encode(file_get_contents($filename));
/*base64_encode() codifica uma estrig em base64*/

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($filename);

$base64encode =  "data:" .$mimetype. ";base64," . $base64;

/*
abaixo eu usei o <?= ?> para abreviar a tag completa do php, mas eu poderia ter feito 
completo <?php echo $base64encode; ?>, mas da outra forma o navagador ja entende que é 
uma abreviação*/
?>
<a href="<?=$base64encode?>" target="_blank">Link da imagen</a>

<img src="<?=$base64encode?>" >
