<?PHP
/* mcrypt_encrypt() Aviso: Esta função está OBSOLETA a partir do PHP 7.1.0 e foi 
REMOVIDA a partir do PHP 7.2.0. Depender dessa função é altamente desencorajado. 
aviso do site do php */

//Criptografia em PHP

define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
    "nome" => "Luis Fernando", 
    "senha" => "ddd"
];
//criptografando 
$openssl = openssl_encrypt(
  json_encode($data),
  'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl ."<br>";

//descriptografando
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

$x = json_decode($string, true); //transformando em array novamente (é opcional)
var_dump($x);
?>