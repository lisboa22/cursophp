<?php 

session_id('61pog6bmj2elhe0aah19bij86l');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>