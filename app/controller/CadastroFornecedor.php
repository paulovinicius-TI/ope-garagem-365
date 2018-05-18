<?php
	include "../model/conexao.php";

	$nome = isset($_POST['nome-fornecedor']) ? $_POST['nome-fornecedor'] : false;
	$descricao = isset($_POST['descricao-fornecedor']) ? $_POST['descricao-fornecedor'] : false;
	$cep = isset($_POST['cep-cliente']) ? $_POST['cep-cliente'] : false;
	$logradouro = isset($_POST['logradouro-cliente']) ? $_POST['logradouro-cliente'] : false;
	$numero = isset($_POST['numero-end-fornecedor']) ? $_POST['numero-end-fornecedor'] : false;
	$bairro = isset($_POST['bairro-cliente']) ? $_POST['bairro-cliente'] : false;
	$cidade = isset($_POST['cidade-cliente']) ? $_POST['cidade-cliente'] : false;
	$telefone = isset($_POST['tel']) ? $_POST['tel'] : false;
	$email = isset($_POST['email']) ? $_POST['email'] : false;
	$sqlFornec = mysqli_query($conexao, "INSERT INTO fornecedor(nome, descricao) 
  	VALUES('$nome', '$descricao')");
  	$IdFornecedor = mysqli_insert_id($conexao);
  	$sqlEnd = mysqli_query($conexao, "INSERT INTO endereco(cidade, logradouro, numero, bairro, cep, id_fornec) 
  	VALUES('$cidade', '$logradouro', '$numero', '$bairro', '$cep', '$IdFornecedor')");
  	$sqlCont = mysqli_query($conexao, "INSERT INTO contato(telefone, email, id_fornec) 
  	VALUES('$telefone', '$email', '$IdFornecedor')");

  	header("Location: ../view/cadastro_fornecedor.php");
?>