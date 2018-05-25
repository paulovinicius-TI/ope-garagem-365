<?php 
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
  $sqlF = "SELECT * FROM fornecedor ORDER BY id";
  $retornoF = mysqli_query($conexao, $sqlF) or die ('Erro');
  $sqlE = "SELECT * FROM endereco WHERE cpf_cliente = '' ORDER BY id_fornec";
  $retornoE = mysqli_query($conexao, $sqlE) or die ('Erro');
  $sqlC = "SELECT * FROM contato WHERE cpf_cliente = '' ORDER BY id_fornec";
  $retornoC = mysqli_query($conexao, $sqlC) or die ('Erro');
?>


<?php
while ($registroF = mysqli_fetch_array($retornoF) and $registroE = mysqli_fetch_array($retornoE) and $registroC = mysqli_fetch_array($retornoC)){
	$id = $registroF['id'];
	$nome = $registroF['nome'];
	$descricao = $registroF['descricao'];
	$cep = $registroE['cep'];
	$logradouro = $registroE['logradouro'];
	$numero = $registroE['numero'];
	$bairro = $registroE['bairro'];
	$cidade = $registroE['cidade'];
	$telefone = $registroC['telefone'];
	$email = $registroC['email'];

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
}
mysqli_close($conexao);
echo "</table>";
?>
