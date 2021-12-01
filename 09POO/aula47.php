<?php
/*Hereança
clase filha tem acesso as infomações(algumas) da classe pai, mais a classe pai n tem 
acesso as informação da classe filha
*/
class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
}

class CPF extends Documento{
    // classe CPF recebe a "herança da classe Documento"
    public function Validar():bool{
        $numCPF = $this->getNumero();
        //como se fosse a validação do cpf, n quis usar o codigo mais se eu quiser ele 
        //esta em aula44.php
        return true;
    }
}
 $doc = new CPF();
 $doc -> setNumero("12345678901");
 var_dump($doc -> Validar());
 echo "<br>"; 
echo $doc->getNumero();

?>
