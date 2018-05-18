<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php 
	include "menu.php";
	include "../controller/UrlRestritaLogado.php";
	echo "<table class='tabela-lista-fornecedores' border=1>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Nome</th>";
	echo "<th>Descrição</th>";
	echo "<th>CEP</th>";
	echo "<th>Logradouro</th>";
	echo "<th>N°</th>";
	echo "<th>Bairro</th>";
	echo "<th>Cidade</th>";
	echo "<th>Telefone</th>";
	echo "<th>Email</th>";
	echo "</tr>";
  include "../model/conexao.php";	
  $sqlF = "SELECT * FROM fornecedor";
  $retornoF = mysqli_query($conexao, $sqlF) or die ('Erro');
  $sqlE = "SELECT * FROM endereco";
  $retornoE = mysqli_query($conexao, $sqlE) or die ('Erro');
  $sqlC = "SELECT * FROM contato";
  $retornoC = mysqli_query($conexao, $sqlC) or die ('Erro');
	?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<title>Fornecedores Cadastrados - Garagem</title>

</head>
<body id="top" data-spy="scroll">
<?php
while ($registro = mysqli_fetch_array($retornoF)){
	$id = $registro['id'];
	$nome = $registro['nome'];
	$descricao = $registro['descricao'];
while ($registro = mysqli_fetch_array($retornoE)){
	$cep = $registro['cep'];
	$logradouro = $registro['logradouro'];
	$numero = $registro['numero'];
	$bairro = $registro['bairro'];
	$cidade = $registro['cidade'];
while ($registro = mysqli_fetch_array($retornoC)){
	$telefone = $registro['telefone'];
	$email = $registro['email'];

	echo"<tr>";
	echo "<td>". $id ."</td>";
	echo "<td>". $nome ."</td>";
	echo "<td>". $descricao."</td>";
	echo "<td>". $cep."</td>";
	echo "<td>". $logradouro."</td>";
	echo "<td>". $numero."</td>";
	echo "<td>". $bairro."</td>";
	echo "<td>". $cidade."</td>";
	echo "<td>". $telefone."</td>";
	echo "<td>". $email."</td>";
	echo "</tr>";
}}}
mysqli_close($conexao);
echo "</table>";
?>

</body>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/js/jquery.mask.min.js"></script>
<script src="../assets/js/mascaras.js"></script>
</html>