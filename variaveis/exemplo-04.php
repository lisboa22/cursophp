<?php 

$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; // Pega o ip do usuário que está acessando seu site.

$name = $_SERVER["SCRIPT_NAME"];

echo $name;

 ?>