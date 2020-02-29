<?php 

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback(); // Cancela o comando delete.

$conn->commit(); //Confirma o comando delete.

echo "Excluido com sucesso!";

 ?>