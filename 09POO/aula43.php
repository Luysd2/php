<?php
//atributos e metodos(get e set)
class Carro  {
    private $modelo;
    private $motor;
    private $ano;

    //get e set de Modelo
    public function getModelo(){
        return $this->modelo; 
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    //get e set de Motor
    public function getMotor(){
        return $this->motor; 
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }

    //get e set de Ano
    public function getAno():int{
        /* eu coloquei o :int so para ele modificar o tipo, la em baixo eu coloquei como 
        string mais com o :int, ele muda para inteiro */
        return $this->ano; 
    }
    public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("GOL GT");
$gol->setMotor("1.8");
$gol->setAno("2013");

print_r($gol->exibir());

echo "<br>";

$jeep = new Carro();
$jeep->setModelo("renegade");
$jeep->setMotor("2.0");
$jeep->setAno("2019"); /* no getAno eu coloquei o :int para mudar de string par 
inteiro, mas eu poderia so ter colocado 2019 sem as aspas que ele ja seria do tipo int*/

print_r($jeep->exibir());

echo "<br>";
var_dump($jeep->exibir());
?>