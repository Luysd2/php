<?php
    class Documento{
        private $numero;

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($numero){
            $resultado = Documento::validarCPF($numero);
            //para acessar um metodo estatica se usa ::
            $this->numero = $numero;

            if($resultado === false ){
                throw new Exception("CPF informado não é valido.");
            }
        }

        public static function validarCPF($cpf):bool{
            //verifica se o numero foi informado
            if(empty($cpf)) {
                return false;
            }
            //elimina possivel mascara
            $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
             
            //verifica se o numero informado é igual a 11
            if (strlen($cpf) != 11) {
                echo "length";
                return false;
            }
            /* Verifica se nem uma das sequencia invalidas abaixo foi digitada.
            se for, retorna false  */
            else if ($cpf == '00000000000' || 
                $cpf == '11111111111' || 
                $cpf == '22222222222' || 
                $cpf == '33333333333' || 
                $cpf == '44444444444' || 
                $cpf == '55555555555' || 
                $cpf == '66666666666' || 
                $cpf == '77777777777' || 
                $cpf == '88888888888' || 
                $cpf == '99999999999') {
                return false;
            /*calcula os digitos verificadores para verificar se o cpf é valido */
             } else {   
                 
                for ($t = 9; $t < 11; $t++) {
                     
                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }
         
                return true;
            }
        }
    }
    //instanciando a clase 
    //$cpf = new Documento();
    //$cpf->setNumero("20783918321");
    //var_dump($cpf->getNumero());

    var_dump(Documento::validarCPF("20783918321")); // tem q retorna verdadeiro
    //metodos estaticos nao precisar ser estanciado
?>