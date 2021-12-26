<?php
//$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
/*
    $dsn = 'mysql:host=localhost;dbname=dbphp7';
    $user = 'root';
    $password = '';
    
    try{
        $conn = new PDO($dsn, $user, $password);
    }
    catch(PDOException $ex){
    }

*/
$dsn = 'mysql:dbname=dbphp7;host=127.0.0.1';
$user = 'root';
$password = '';

$conn = new PDO($dsn, $user, $password);

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>".$key."</strong>".$value."<br/>";

	}

	echo "========================================<br>";

}


?>