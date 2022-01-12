<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segurança</title>
</head>
<body>
    <h2>Cross-site_Scripting_(XSS)</h2>
    <form action="" method="POST">
        <input type="text" name="busca">
        <button type="submit">Enviar</button>
        <br><br><br>
        
    </form>
</body>
</html>

<?php
$_POST["busca"] = '<a href=""><strong>teste</strong></a> <script>alert("OK")</script>';

if(isset($_POST["busca"])){
    //coloca para inspecionar o codigo fonte no navegador para ver a diferença em cada echo
    //echo $_POST["busca"];
    //echo strip_tags($_POST["busca"]);
    /*Esta função tenta retornar uma string retirando todas as tags HTML e PHP de str,
    mas eu posso deixar que ela execute algumas, é so colocar 
    strip_tags($_POST["busca"], "tag/tags que vc quer q ela execute") */
    
    echo htmlentities($_POST["busca"]);
    /*htmlentities — Converte todos os caracteres aplicáveis em entidades html
     */

}
?>