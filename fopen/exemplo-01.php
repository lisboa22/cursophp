<?php 

$file = fopen("log.txt", "a+");

date_default_timezone_set('America/Bahia');

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";

 ?>