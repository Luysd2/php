<?php
//cadastro do cliente

namespace Cliente;
class Cadastro extends \Cadastro{
    /* A classe cadsatro esta extendendo da outra classe cadsatro, mais qual? Se dentro deste
    diretorio so tem um arquivo?
    Por isso eu usei a \(contra barra), ele vai sair da pasta atual(Cliente) e ir para a 
    outra(class) e nessa outra tbm tem um arquivo com uma classe cadastro, é dela que essa 
    classe(a classe deste arquivo) esta erdando. 
    
     */
    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente " . $this -> getNome();
    }
}

?>