<?php
/*Metodos magicos usados aqui
__construct(), __destruct() e __toString()
OBS: exiete outros, mas esses sao os mais utilizados

*/
class Endereco{
    private $rua;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) {//eu poderia usar tbm os mesmo nomes das variavei acima
    // metodo magico(__construcut) ou construtor
    $this->rua = $a;
    $this->numero = $b;
    $this->cidade = $c;
        
    }
    public function __destruct(){
        //serve para destruir, apagar da memoria
        //var_dump("Destruir");
        
    }
    public function __toString(){
        return $this->rua.", ".$this->numero." - ".$this->cidade;
        /* essa função serve para transforma tudo em estring
        assim vc podera so um echo para exibir as informações */
    }
}
$meuEndereco = new Endereco("MA-121", "00", "Buritirana");
//var_dump($meuEndereco);

//unset($meuEndereco);
// para destruir as informações da variavel

//var_dump($meuEndereco); 
/* agora as informações dessa variavel nõa vao aparecer pq n existe 
mais, pq foram destruidas pelo unset($meuEndereco)*/
echo $meuEndereco;

?>
