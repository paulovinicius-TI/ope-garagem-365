<?php
	include_once("../model/conexao.php");
	$cpf = mysqli_real_escape_string($conexao, $_POST['cpf-cliente']);
	$nome = mysqli_real_escape_string($conexao, $_POST['nome-cliente']);
	$sobrenome = mysqli_real_escape_string($conexao, $_POST['snome-cliente']);
	$cep = mysqli_real_escape_string($conexao, $_POST['cep-cliente']);
	$logradouro = mysqli_real_escape_string($conexao, $_POST['logradouro-cliente']);
	$numero = mysqli_real_escape_string($conexao, $_POST['numero-end-cliente']);
	$bairro = mysqli_real_escape_string($conexao, $_POST['bairro-cliente']);
	$cidade = mysqli_real_escape_string($conexao, $_POST['cidade-cliente']);
	$telefone = mysqli_real_escape_string($conexao, $_POST['tel']);
	$email = mysqli_real_escape_string($conexao, $_POST['email']);


var_dump($_POST); 
	// echo "$cpf - $nome - $sobrenome";
	$result_clientes = "UPDATE cliente 
	INNER JOIN endereco ON cliente.cpf = endereco.cpf_cliente
	INNER JOIN contato ON cliente.cpf = contato.cpf_cliente 
	SET nome = '$nome', 
	sobrenome = '$sobrenome',
	cep = '$cep',
	logradouro = '$logradouro',
	numero = '$numero',
	bairro = '$bairro',
	cidade = '$cidade',
	telefone = '$telefone',
	email = '$email'
	WHERE cpf = '$cpf'";
	
	$resultado_clientes = mysqli_query($conexao, $result_clientes);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php

		if(mysqli_affected_rows($conexao) != 0){
			header("Location: ../view/lista_cliente.php");

		}else{
			header("Location: ../view/lista_cliente.php");
		}
		?>
	</body>
</html>
<?php $conexao->close(); ?>