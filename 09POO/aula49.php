<?php
/*Classe abstrata
A classe abstrata n pode ser instaciada 
*/
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Civic implements Veiculo{
    public function acelerar($velocidade){
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade){
        echo "O veículo frenou até " . $velocidade . " km/h";
    }
    public function trocarMarcha($marcha){
        echo "O veículo engatou a marcha " . $marcha;
    }
}

class Fusca extends Civic {
    public function empurrar(){

    }
}

$carro = new Fusca(); // instancia da classe Fusca
//$carro = new Civic(); // instancia da classe abstrata Civic
$carro -> acelerar(200); 

