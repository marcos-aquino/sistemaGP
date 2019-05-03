<?php

include_once ("conexao.php");


	$nome = $_POST['nome'];
	$setor = $_POST['setor'];
	$dataEntrada = $_POST['dataEntrada'];
	$dataSaida = $_POST['dataSaida'];
	$tipoColaborador = $_POST['tipoColaborador'];
	$rg = $_POST['rg'];
	$orgao = $_POST['orgao'];
	$cpf = $_POST['cpf'];
	$dataNascimento = $_POST['dataNascimento'];
	$nacionalidade = $_POST['nacionalidade'];	
	$estadoCivil = $_POST['estadoCivil'];
	$nomePai = $_POST['nomePai'];
	$nomeMae = $_POST['nomeMae'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$cursoFormacao = $_POST['cursoFormacao'];
	$previsaoFormatura = $_POST['previsaoFormatura'];
	$matricula = $_POST['matricula'];
	$banco = $_POST['banco'];
	$agencia = $_POST['agencia'];
	$contaCorrente = $_POST['contaCorrente'];
	$lancamentoSiga = $_POST['lancamentoSiga'];


	$query = "INSERT INTO colaboradores (nome, setor, dataEntrada, dataSaida, tipoColaborador, rg, orgao, cpf, dataNascimento, nacionalidade, estadoCivil, nomePai, nomeMae, endereco, bairro, cidade, estado, cep, telefone, celular, email, cursoFormacao, previsaoFormatura, matricula, banco, agencia, contaCorrente, lancamentoSiga) VALUES ('".$nome."', '".$setor."', '".$dataEntrada."', '".$dataSaida."', '".$tipoColaborador."', '".$rg."', '".$orgao."', '".$cpf."', '".$dataNascimento."', '".$nacionalidade."', '".$estadoCivil."', '".$nomePai."', '".$nomeMae."', '".$endereco."', '".$bairro."', '".$cidade."', '".$estado."', '".$cep."', '".$telefone."', '".$celular."', '".$email."', '".$cursoFormacao."', '".$previsaoFormatura."', '".$matricula."', '".$banco."', '".$agencia."', '".$contaCorrente."', '".$lancamentoSiga."')";

	$sql = mysqli_query($conexao, $query);
	header('Location: ../index.php');
	exit();

?>
