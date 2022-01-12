<?php
// OR 1 = 1 --  
//comando usado junto com o id na url para mostrar todos os usuriso do banco
// comando usado ?id=18 OR 1=1 -- 
// como OR 1=1  sempre é verdadeiro(pq 1 = 1) ele vai iginorar e mostrar todos 

$id = (isset($_GET["id"])) ? $_GET["id"]:19;
if(!is_numeric($id) || strlen($id) > 5 ){
    exit("Parado ai");
}
$conn = mysqli_connect("127.0.0.1", "root", "", "dbphp7");

if($conn = mysqli_connect("127.0.0.1", "root", "", "dbphp7")){
    //echo "deu certo"; die;
}else{
    echo "deu errado"; die;
}

$sql = "SELECT * FROM tb_usuario WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_object($exec)){
    //echo $resultado->deslogin ."<br>";
    var_dump($resultado);
   
}

?>



