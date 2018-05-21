<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php 
	include "menu.php";
	echo "<table class='tabela-lista-clientes' border=1>";
	echo "<tr>";
	echo "<th>CPF</th>";
	echo "<th>Nome</th>";
	echo "<th>Sobrenome</th>";
	echo "<th>CEP</th>";
	echo "<th>Logradouro</th>";
	echo "<th>N°</th>";
	echo "<th>Bairro</th>";
	echo "<th>Cidade</th>";
	echo "<th>Telefone</th>";
	echo "<th>Email</th>";
	echo "</tr>";
	include "../model/conexao.php";	
	$sqlCl = "SELECT * FROM cliente";
	$retornoCl = mysqli_query($conexao, $sqlCl) or die ('Erro');
	$sqlE = "SELECT * FROM endereco WHERE id_fornec = 0";
	$retornoE = mysqli_query($conexao, $sqlE) or die ('Erro');
	$sqlCo = "SELECT * FROM contato WHERE id_fornec = 0";
	$retornoCo = mysqli_query($conexao, $sqlCo) or die ('Erro');
	?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<title>Clientes Cadastrados - Garagem</title>

</head>
<body id="top" data-spy="scroll">
<?php
while ($registro = mysqli_fetch_array($retornoCl)){
	$nome = $registro['nome'];
	$sobrenome = $registro['sobrenome'];
	$cpf = $registro['cpf'];
while ($registro = mysqli_fetch_array($retornoE)){
	$cep = $registro['cep'];
	$logradouro = $registro['logradouro'];
	$numero = $registro['numero'];
	$bairro = $registro['bairro'];
	$cidade = $registro['cidade'];
while ($registro = mysqli_fetch_array($retornoCo)){
	$telefone = $registro['telefone'];
	$email = $registro['email'];

	echo"<tr>";
	echo "<td>". $cpf ."</td>";
	echo "<td>". $nome ."</td>";
	echo "<td>". $sobrenome."</td>";
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
</html>