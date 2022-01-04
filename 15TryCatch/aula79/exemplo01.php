<?php
try {
    throw new Exception("Houve um error", 400);
} catch (Exception $e) {
    $error = json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
    echo $error;
}


?>