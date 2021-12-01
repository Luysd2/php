<?php
/*Polimorfismo
Polimorfismo te posibilitar ter os mesmos metodos com o mesmo nome na classe pai e 
na clase filha que fazem coisas diferentes, como os exemplos abaixo


vc pode observar tem um clsse animal que é pai que detm suas funçoões e é pai das demais.
mesmo assim as classes filha tem as mesma funçoes, mas algumas com retorno diferente, isso 
é por conta do polimorfismo.
na ultima classe(Passaro), ela tem as duas funções, ambas com polimosfismo, mas a ultima 
função ela tem uma particularidade, ela retorna o seu proprio valor(caracteristica VOAR) e 
o valor da sua classe pai (caracteristica ANDAR). Isso pq eu usei uma palavra reservada do 
php para isso, que é parent e usei o :: para acessar a a classe pai(parent::mover()).
assim ela retorna dois valores, o dela mesmo e o da classe pai
*/

abstract class Animal {
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Andar";
    }
}

class Cachorro extends Animal{
     public function falar(){
         return "Late";
     }    
}

class Gato extends Animal{
    public function falar(){
        return "Miar";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Cantar";
    }

    public function mover(){
        return "Voar e " . parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto -> falar() . "<br>";
echo $pluto -> mover() . "<br>";

echo "------------------------ <br>";

$gato= new Gato();
echo $gato -> falar() . "<br>";
echo $gato -> mover() . "<br>";

echo "------------------------ <br>";

$ave= new Passaro();
echo $ave -> falar() . "<br>";
echo $ave -> mover() . "<br>";

?>