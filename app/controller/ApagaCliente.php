<?php
	include_once("../model/conexao.php");
	$cpf = mysqli_real_escape_string($conexao, $_POST['cpf-cliente']);
	$status = mysqli_real_escape_string($conexao, $_POST['status']);


var_dump($_POST); 
	// echo "$cpf - $nome - $sobrenome";
	$result_clientes = "UPDATE cliente SET status = 0 WHERE cpf = '$cpf'";
	
	$resultado_clientes = mysqli_query($conexao, $result_clientes);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php

		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ope-garagem-395/app/view/lista_cliente.php/'>
				<script type=\"text/javascript\">
					alert(\"Cliente alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ope-garagem-395/app/view/lista_cliente.php'>
				<script type=\"text/javascript\">
					alert(\"Cliente não foi alterado com Sucesso.\");
				</script>
			";	
		}
		?>
	</body>
</html>
<?php $conexao->close(); ?>