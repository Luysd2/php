<?php
class Pessoa{
    public $nome; //atributo
    public function falar(){ //metodo
        return "O meu nome é " .$this->nome;
    }
}
$luis= new Pessoa(); //estanciando a classe 
$luis -> nome = "Luis Fernando";
echo $luis -> falar();

?>
