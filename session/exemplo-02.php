<?php 

require_once("config.php");

//session_unset(); //apaga todas as sessões ativas.

unset($_SESSION['nome']); //apaga uma sessão especificada.

echo $_SESSION['nome'];

//session_destroy();

 ?>