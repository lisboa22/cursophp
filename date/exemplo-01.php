<?php 

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Bahia');
echo "Hoje é ".strftime('%A, %d de %B de %Y', strtotime('today'));

echo date("d/m/Y H:i:s", 1482758040)."<br>"; //Com timestamp.

echo time()."<br>";

echo date("d/m/Y H:i:s")."<br>";//Sem Timestamp.

echo time();


 ?>