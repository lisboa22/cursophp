<?php 

$cep = '42800029';
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$reponse = curl_exec($ch);

curl_close($ch);

$data = json_decode($reponse, true);

print_r($data);

//print_r($data["logradouro"]);


 ?>