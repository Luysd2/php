<?php
/*Encapsulamento
*/

class Pessoa{
    public $nome = "Rasmus Lerdorf";
    protected $idade = 24;
    private $senha = "12345";
    
    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}


$objeto = new Pessoa();
//echo $objeto->nome . "<br>";
/* ele vai conseguir ver o nome pq é publico*/
//echo $objeto->idade . "<br>";
/* ele não vai conseguir ver o nome pq é protegido, ele so conseguiria se estivese denotro da 
classe ou erdando de da classe pai*/
//echo $objeto->senha . "<br>";
/* ele nao vai conseguir ver, mesmo que ele erde de outra classe, mas se ele tiver 
dentro da classe, ai sim ele vai poder ver */

$objeto ->verDados();
/* agora as informações vao aparecer pq a função verDados é publica */ 

?>
