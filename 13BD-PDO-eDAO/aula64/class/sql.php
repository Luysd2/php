<?php

class Sql extends PDO{
    private $conn;
    public function __construct(){
        //$dsn = 'mysql:dbname=dbphp7;host=Localhost';
        //$user = 'root';
        //$password = '';
        $this->conn = new PDO("mysql:host=Localhost;dbname=dbphp7", "root", "");
    }

    private function setParams($statment, $parameers = array()){
        foreach($parameers as $kay => $value){
            $this -> setParam($statment, $kay, $value);
            /* o erro é que o setParam so tinha dois paramentros($kay, $value) 
            e tinha que ser 3 ($statment, $kay, $value) */
        }
    }
    private function setParam($statment, $key, $value){
        $statment->bindParam($key, $value);
    }
    // ele mostra esses "erros" mas o codigo funcina 
    public function query($rowQuery, $params = array()){
        $stmt = $this->conn->prepare($rowQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rowQuery, $params= array()): array{
        $stmt = $this->query($rowQuery, $params);
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>