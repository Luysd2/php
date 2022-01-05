<?php
date_default_timezone_set('America/Sao_Paulo'); //definindo o local da data e hora

$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Luis Fernando", $titleColor);
imagestring($image, 3, 450, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);
//utf8_decode() para mostar a acentuação

header("Content-Type: image/jpeg");
//imagejpeg($image); //so mostra o arquivo
imagejpeg($image, "Certificado-". date("d/m/Y")."jpg", 10); //cria o arquivo
imagedestroy($image);


?>