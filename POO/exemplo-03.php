<?php 

class Documento {

	private $numero;

	public function getNumero() {

		return $this->numero;

	}

	public function setNumero($numero) {

		$resultado = Documento::validarCpf($numero);

		if ($resultado === false){

			throw new Exception("CPF Informado inválido!");

		}

		$this->numero = $numero;

	}

	public static function validarCpf($cpf):bool
	{

		//Verifica se um número foi informado.
		if(empty($cpf)) {
        return false;
    }

 	//Elimina possível máscara.
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    //Verifica se o número informado é igual a 11.
    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    }
    //Verifica se nunhuma das sequências abaixo foi digitada.
    //Se sim retorna False.
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
    //Calcula os digitos verificadores para verificar se o cpf é válido.
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
/*
$cpf = new Documento();
$cpf->setNumero("62871722587");

var_dump($cpf->getNumero());*/

//Chamar método estatico sem instanciar a classe.

var_dump(Documento::validarCpf("62871722587"));

 ?>