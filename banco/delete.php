<?php




include_once ("conexao.php");

	$id = $_GET['id'];


	$queryDelete = $conexao->query("delete from gp.colaboradores where id='$id'");
	header('Location: ../listaColaboradores.php');
	exit();


?>
