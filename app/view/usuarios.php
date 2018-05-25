<?php
  include "../model/conexao.php";	
  include "../controller/UrlRestritaLogado.php";
  $sql = "SELECT * FROM funcionario";
  $retorno = mysqli_query($conexao, $sql) or die ('Erro');
	?>
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
