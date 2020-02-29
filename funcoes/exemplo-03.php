<?php 

function ola($texto = "mundo!", $periodo = "Bom dia!"){

	return "Olá $texto $periodo <br>";

}

echo ola();

echo ola("", "Bom dia!");

echo ola("Robson!", "Boa tarde!");

echo ola("Lisboa!", "Boa noite!");


 ?>