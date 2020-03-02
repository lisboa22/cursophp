<?php 

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
	
	//$cmd = $_POST["cmd"];//Desta forma o site fica vulnerável a ataques hacker

	$cmd = escapeshellcmd($_POST["cmd"]); //Desta forma o site fica seguro.

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";

}

 ?>

 <form method="post">

 	<input type="text" name="cmd">
 	<button type="submit">Enviar</button>

 </form>