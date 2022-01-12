<?php
//Entendendo as permissões de pasta
/*se eu executar esse script aqui no vc code, ele n da erro, se eu executar 
no navegador ele da erro e pede a permisão (mkdir(): Permission denied)
*/  
$pasta = "teste";
$permissao = "0775";

if(!is_dir($pasta)) mkdir($pasta, $permissao);
echo "pasta criada!";

// outra forma de criar 
echo "\n";
$pasta = "teste2";
if(is_dir($pasta)) {
    echo "pasta ja existe";
}else{
        mkdir($pasta);
        echo "pasta criada!";
    }

?>