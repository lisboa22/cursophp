<?php 

function soma(int ... $valores):string{


	return array_sum($valores);

}

echo var_dump(soma(2, 2))."<br>";

echo soma(2.8, 4.3)."<br>";


 ?>