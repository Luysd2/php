<?php

class Sql extends PDO{
    private $conn;
    public function __construct(){
        //$dsn = 'mysql:dbname=dbphp7;host=Localhost';
        //$user = 'root';
        //$password = '';
        $this->conn = new PDO("mysql:host=Localhost;dbname=dbphp7", "root", "");
    }

    private function setParams($statement, $parameters = array()){
        foreach($parameters as $key => $value){
            $this -> setParam($statement, $key, $value);
            /* o erro é que o setParam so tinha dois paramentros($kay, $value) 
            e tinha que ser 3 ($statment, $kay, $value) */
        }
    }
    private function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }
    // ele mostra esses "erros" mas o codigo funcina 
    public function query($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params= array()): array{
        $stmt = $this->query($rawQuery, $params);
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>