<?php 

$pasta = "arquivos";

$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Driretório criado com sucesso!";

?>