<?php
//session_id("0b30fe10fc72f88ce4f7554009b56912");
/*ja sabendo o id da seção, eu posso ver tudo que o usuario esta vendo, msm que ele 
ja esteja logado, por isso é bom usar o session_regenerate_id()
*/
require_once("config29.php");
session_regenerate_id(); //para mudar o id da seção cada vez q atualizar a pagina
//por padrão o id é o msm, msm quando vc atualiza a pagina

echo session_id();
//echo "<br>";
//var_dump($_SESSION);

?>