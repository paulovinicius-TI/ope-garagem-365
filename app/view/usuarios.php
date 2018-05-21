<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php 
	include "menu.php";
	include "../controller/UrlRestritaLogado.php";
  include "../model/conexao.php";	
  $sql = "SELECT * FROM funcionario";
  $retorno = mysqli_query($conexao, $sql) or die ('Erro');
	?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<title>Usuários Cadastrados - Garagem</title>

</head>
<body id="top" data-spy="scroll">
<?php
	echo "<table class='tabela-lista-usuarios' border=1>";
	echo "<tr>";
	echo "<th>Nome</th>";
	echo "<th>Sobreome</th>";
	echo "<th>Email</th>";
	echo "<th>CPF</th>";
	echo "</tr>";

?>
<?php
while ($registro = mysqli_fetch_array($retorno)){
	$nome = $registro['nome'];
	$sobrenome = $registro['sobrenome'];
	$email = $registro['email'];
	$cpf = $registro['cpf'];

	echo"<tr>";
	echo "<td>". $nome ."</td>";
	echo "<td>". $sobrenome ."</td>";
	echo "<td>". $email."</td>";
	echo "<td>". $cpf ."</td>";
	echo "</tr>";
}
mysqli_close($conexao);
echo "</table>";
?>

</body>
</html>