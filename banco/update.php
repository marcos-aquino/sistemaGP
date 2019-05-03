<?php


	include_once ("conexao.php");

	$id = $_GET['id'];


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


	$query = "UPDATE colaboradores SET nome='$nome', setor='$setor', dataEntrada='$dataEntrada', dataSaida='$dataSaida', tipoColaborador='$tipoColaborador', rg='$rg', orgao='$orgao', cpf='$cpf', dataNascimento='$dataNascimento', nacionalidade='$nacionalidade', estadoCivil='$estadoCivil', nomePai='$nomePai', nomeMae='$nomeMae', endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep', telefone='$telefone', celular='$celular', email='$email', cursoFormacao='$cursoFormacao', previsaoFormatura='$previsaoFormatura', matricula='$matricula', banco='$banco', agencia='$agencia', contaCorrente='$contaCorrente', lancamentoSiga='$lancamentoSiga' where id='$id'";

	$sql = mysqli_query($conexao, $query);
	header('Location: ../listaColaboradores.php');
	exit();

?>
