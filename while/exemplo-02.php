<?php 

$total = 100;
$desconto = 0.9;

do {
	
	$total *= $desconto;

} while ( $total > 100);

echo $total."<br>";

$valorProduto = 14500.00;
$desconto = 5;

if ($valorProduto > 10000) {
	
	echo $valorProduto = $valorProduto - ($valorProduto*($desconto/100));
}

echo "<br>";

$status = true;

if ($status == true) {
	
	echo $liberado = 1;

} else {

	echo $liberado = 0;

}

 ?>