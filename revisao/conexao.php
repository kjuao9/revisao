<?php
function conecta_mysql(){
	$host = "localhost";
	$usuario = "phpmyadmin";
	$senha = "root";
	$nome_bd = "revisao";

	$conexao = mysqli_connect($host,$usuario,$senha,$nome_bd);
	mysqli_set_charset($conexao, "utf8");
	
	return $conexao;
}


?>
