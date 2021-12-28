<?php
if (!is_dir("imag")) mkdir("imag");

foreach (scandir("imag") as $item) {
    if (!in_array($item, array(".", ".."))) {
        // esse if é para ignorar o '.' e o '..' de dentro do array
        unlink("imag/" .$item ); //apaga cada item da pasta imag
    }
}

echo "apagando arquivos";
?>