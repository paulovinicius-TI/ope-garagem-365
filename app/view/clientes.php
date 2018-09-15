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
	echo "<th>Ação</th>";
	echo "</tr>";

	$result_clientes = "SELECT * FROM cliente INNER JOIN endereco  ON cliente.cpf = endereco.cpf_cliente INNER JOIN contato ON cliente.cpf = contato.cpf_cliente WHERE cliente.status != 0";

	$resultado_clientes = mysqli_query($conexao, $result_clientes);


 while ($registroCl = mysqli_fetch_assoc($resultado_clientes)){
	echo "<tr>";
		echo "<td>".$registroCl['cpf']; "</td>";
		echo "<td>".$registroCl['nome']; "</td>";
		echo "<td>".$registroCl['sobrenome']; "</td>";
		echo "<td>".$registroCl['cep']; "</td>";
		echo "<td>".$registroCl['logradouro']; "</td>";
		echo "<td>".$registroCl['numero']; "</td>";
		echo "<td>".$registroCl['bairro']; "</td>";
		echo "<td>".$registroCl['cidade']; "</td>";
		echo "<td>".$registroCl['telefone']; "</td>";
		echo "<td>".$registroCl['email']; "</td>";
		echo "<td hidden='true'>".$registroCl['status']; "</td>";
		
		echo "<td>";
?>
		<button type='button' class='fas fa-pencil-alt' data-target='#alterarClienteModal' data-toggle='modal' 
			data-whatevernome="<?php echo $registroCl['nome'];?>"
			data-whateversobrenome="<?php echo $registroCl['sobrenome'];?>"
			data-whatevercpf="<?php echo $registroCl['cpf'];?>"  
			data-whatevercep="<?php echo $registroCl['cep'];?>"
			data-whateverlogradouro="<?php echo $registroCl['logradouro'];?>"
			data-whatevernumero="<?php echo $registroCl['numero'];?>"
			data-whateverbairro="<?php echo $registroCl['bairro'];?>"
			data-whatevercidade="<?php echo $registroCl['cidade'];?>"
			data-whatevertelefone="<?php echo $registroCl['telefone'];?>"
			data-whateveremail="<?php echo $registroCl['email'];?>"

			></button>


	
		<button type='button' class='fas fa-trash-alt' data-target='#excluirClienteModal' data-toggle='modal' 
		data-whatevercpf="<?php echo $registroCl['cpf'];?>"
		data-whateverstatus="<?php echo $registroCl['status'];?>"


		></button>			
		</td>			
									


<?php
}
mysqli_close($conexao);
?>
