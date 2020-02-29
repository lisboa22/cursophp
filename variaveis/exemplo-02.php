<?php
/*
$anoNascimento = 1974;

$nomeCompleto = "Robson Lisboa Santos";*/

//Exercicio sobre variáveis.

$nome1 = "Robson"; // Adiciona o nome Robson a variável $nome1.

$sobrenome = "Lisboa Santos";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit; //Para o código.

echo "<br/>";

echo $nome1; // Mostra o conteúdo da variável $nome1 na tela. 

echo "<br/>"; //Pula uma linha.

unset($nome1); // Apaga uma variável da memória.

if (isset($nome1)) // Testa se a variável $nom1 exite para executar o comando. 
{

	echo $nome1;

};


?>