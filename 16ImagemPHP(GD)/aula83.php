<?php
date_default_timezone_set('America/Sao_Paulo'); //definindo o local da data e hora

$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts/Bevan/Bevan-Regular.ttf", "Certificado");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts/Playball/Playball-Regular.ttf", "Luis Fernando");
imagestring($image, 3, 450, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);
//utf8_decode() para mostar a acentuação

header("Content-Type: image/jpeg");
imagejpeg($image); //so mostra o arquivo
//imagejpeg($image, "Certificado-". date("d/m/Y")."jpg", 10); //cria o arquivo
imagedestroy($image);


?>