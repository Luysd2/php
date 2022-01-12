<?php
//Usando o reCaptcha para impedir Robôs
$email = $_POST["inputEmail"];
//var_dump($_POST);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret" => "6LfPYgceAAAAAEzR5peePec8C1xdNkjwR9gG7GH8",
    "response" => $_POST["g-recaptcha-response"],
    "remoteip" => $_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);
echo"<br> <br>";
//var_dump($recaptcha);

if($recaptcha["success"]===true){
    $nome = substr($email, 0, 4);//pegando os primeiro 4 caracteres do email 
    echo "OK " . $nome;
}else{
    header("Location: aula94.php");
}
?>

<br><br>
<a href="aula94.php"> Voltar </a>