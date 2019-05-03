<?php

	$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "gp";
	$conexao = mysqli_connect($hostname, $user, $password, $database);

	if(!$conexao)
	{
	    echo "FALHA DE CONEXÃO!!!";
	}

?>
