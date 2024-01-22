<?php 
$hostname = "localhost";
$usuario = "root";
$senha = "root";
$bancodedados = "livraria";

$conexao = mysqli_connect($hostname,$usuario,$senha) or die("Não foi possivel conectar");

mysqli_select_db( $conexao, $bancodedados );

?>
