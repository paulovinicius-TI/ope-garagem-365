<?php
	include "../model/conexao.php";

	$nome = isset($_POST['nome-cliente']) ? $_POST['nome-cliente'] : false;
	$sobrenome = isset($_POST['snome-cliente']) ? $_POST['snome-cliente'] : false;
	$cpf = isset($_POST['cpf-cliente']) ? $_POST['cpf-cliente'] : false;
	$cep = isset($_POST['cep-cliente']) ? $_POST['cep-cliente'] : false;
	$logradouro = isset($_POST['logradouro-cliente']) ? $_POST['logradouro-cliente'] : false;
	$numero = isset($_POST['numero-end-cliente']) ? $_POST['numero-end-cliente'] : false;
	$bairro = isset($_POST['bairro-cliente']) ? $_POST['bairro-cliente'] : false;
	$cidade = isset($_POST['cidade-cliente']) ? $_POST['cidade-cliente'] : false;
	$telefone = isset($_POST['tel']) ? $_POST['tel'] : false;
	$email = isset($_POST['email']) ? $_POST['email'] : false;
	$sqlCl = mysqli_query($conexao, "INSERT INTO cliente(cpf, nome, sobrenome,status) 
  	VALUES('$cpf', '$nome', '$sobrenome', 1)");
  	$sqlEnd = mysqli_query($conexao, "INSERT INTO endereco(cidade, logradouro, numero, bairro, cep, cpf_cliente) 
  	VALUES('$cidade', '$logradouro', '$numero', '$bairro', '$cep', '$cpf')");
  	$sqlCont = mysqli_query($conexao, "INSERT INTO contato(telefone, email, cpf_cliente) 
  	VALUES('$telefone', '$email', '$cpf')");

  	header("Location: ../view/lista_cliente.php");
?>