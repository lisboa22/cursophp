<?php 

$a = 10;

function troca_Valor(&$a){ //O & faz com que o valor da variável que está fora da função seja alterada peo comando executado dentro da função

$a += 50;

return $a;

}

echo $a."<br>";

echo troca_Valor($a)."<br>";

echo $a;

 ?>