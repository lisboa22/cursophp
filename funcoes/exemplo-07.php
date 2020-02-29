<?php 

function soma(int ... $valores){


	return array_sum($valores);

}

echo soma(2, 2)."<br>";

echo soma(2.8, 4.3)."<br>";


 ?>