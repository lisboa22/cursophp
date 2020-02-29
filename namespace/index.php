<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->SetNome("Robson Lisboa");
$cad->SetEmail("lisboa22@gmail.com");
$cad->SetSenha("123456");

$cad->registrarVenda();

 ?>