<?php
require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set('America/Sao_Paulo'); //definindo o local da data e hora
/* ao entra na pagina, eu posso passar via url o /hello/Luis, assim ele vai me 
mostar na tela "Hello, Luis", linha 7*/
$app = new \Slim\Slim();
/* se eu n digitar nada na url, ele vai executar essa função e me mostra a linha 10*/
$app->get('/', function(){
    //echo "home page <br>";

    echo json_encode(array(
        'data'=> date("d/m/Y H:i:s")
    ));
});
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();

?>