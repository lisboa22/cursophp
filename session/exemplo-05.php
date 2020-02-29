<?php 

require_once("config.php");

echo session_save_path()."<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Sessões Desabilitadas!";
		break;

	case PHP_SESSION_NONE:
		echo "Sessões não Existem!";
		break;

	case PHP_SESSION_ACTIVE:
		echo "Sessões Ativadas!";
		break;
	
}

 ?>