<?php 

class Pessoa{

	public $nome;//Atributo

	public function falar(){//Método

		return "O meu nome é ".$this->nome;//Dentro de um utiliza-se $this para chamar um atributo que está fora do metodo.
	}

}

$glaucio = new Pessoa(); //Criei o Objeto $glaucio e instanciei dentro dele a classe Pessoa.

$glaucio->nome = "Glaucio Daniel";//Adicionei dentro do atributo $nome a string "Glaucio Daniel" 

echo $glaucio->falar()//Mostri na tela o Método falar().


 ?>