<?php 
	include "../model/conexao.php";	
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
	$sqlCl = "SELECT * FROM cliente ORDER BY cpf";
	$retornoCl = mysqli_query($conexao, $sqlCl) or die ('Erro');
	$sqlE = "SELECT * FROM endereco WHERE id_fornec = 0 ORDER BY cpf_cliente";
	$retornoE = mysqli_query($conexao, $sqlE) or die ('Erro');
	$sqlCo = "SELECT * FROM contato WHERE id_fornec = 0 ORDER BY cpf_cliente";
	$retornoCo = mysqli_query($conexao, $sqlCo) or die ('Erro');
?>

<?php
while ($registroCl = mysqli_fetch_array($retornoCl) and $registroE = mysqli_fetch_array($retornoE) and $registroCo = mysqli_fetch_array($retornoCo)){
	$nome = $registroCl['nome'];
	$sobrenome = $registroCl['sobrenome'];
	$cpf = $registroCl['cpf'];
	$cep = $registroE['cep'];
	$logradouro = $registroE['logradouro'];
	$numero = $registroE['numero'];
	$bairro = $registroE['bairro'];
	$cidade = $registroE['cidade'];
	$telefone = $registroCo['telefone'];
	$email = $registroCo['email'];

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
}
mysqli_close($conexao);
echo "</table>";
?>
