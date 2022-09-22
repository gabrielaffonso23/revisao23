<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "revisao";

$conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conecta)
{

echo "não foi possível conectar o banco";

}

mysqli_set_charset  ($conecta, "uft8");

?>