<?php
class Pessoa{
    public $nome; //atributo
    public function falar(){ //metodo
        return "O meu nome é " .$this->nome;
    }
}
$luis= new Pessoa();
$luis -> nome = "Luis Fernando";
echo $luis -> falar();

?>