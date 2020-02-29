<?php 

/*$nome = "Robson";

function teste()
{
	global $nome; // Permite que uma variável externa à função possa ser utilizada dentro da função. 
	echo $nome;

}


function teste1()
{
	$nome = "José ";
	echo $nome . "Lisboa";

}

teste();

echo "<br/>";

teste1();*/

function setMessage() {

	global $message;
 
    $message = 'Hello World';
 
}
 
setMessage();
 
echo $message;

 ?>