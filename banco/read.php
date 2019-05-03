<?php

include_once ("conexao.php");

$querySelect = $conexao->query("select * from gp.colaboradores");

while($registros = $querySelect->fetch_assoc()):

	$id = $_GET['id'];

	$nome = $registros['nome'];
	$setor = $registros['setor'];
	$dataEntrada = $registros['dataEntrada'];
	$dataSaida = $registros['dataSaida'];
	$tipoColaborador = $registros['tipoColaborador'];
	$rg = $registros['rg'];
	$orgao = $registros['orgao'];
	$cpf = $registros['cpf'];
	$dataNascimento = $registros['dataNascimento'];
	$nacionalidade = $registros['nacionalidade'];	
	$estadoCivil = $registros['estadoCivil'];
	$nomePai = $registros['nomePai'];
	$nomeMae = $registros['nomeMae'];
	$endereco = $registros['endereco'];
	$bairro = $registros['bairro'];
	$cidade = $registros['cidade'];
	$estado = $registros['estado'];
	$cep = $registros['cep'];
	$telefone = $registros['telefone'];
	$celular = $registros['celular'];
	$email = $registros['email'];
	$cursoFormacao = $registros['cursoFormacao'];
	$previsaoFormatura = $registros['previsaoFormatura'];
	$matricula = $registros['matricula'];
	$banco = $registros['banco'];
	$agencia = $registros['agencia'];
	$contaCorrente = $registros['contaCorrente'];
	$lancamentoSiga = $registros['lancamentoSiga'];

	echo "<tr>";
	echo "<td>$nome</td><td>$setor</td><td>$tipoColaborador</td><td>$email</td> <td><a href='edita.php?id=$id'><i>Editar</i></td>   <td><a href='banco/delete.php?id=$id'><i>Excluir</i></td>";
	echo "</tr>";

endwhile;


?>
