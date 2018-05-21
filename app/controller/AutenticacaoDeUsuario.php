<?php
    include "../model/conexao.php";

?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='../view/cadastro_cliente.php'", 1000);
		}

		function loginfailed(){
			setTimeout("window.location='../view/index.php'", 1000);
		}
	</script>
</head>
<body>


	<?php
	$email = $_POST['EmailUsuario'];
	$senha = $_POST['SenhaUsuario'];
	$sql = mysqli_query($conexao,"SELECT * FROM funcionario WHERE email = '$email' and senha = '$senha'") or die(mysqli_error());

	$row = mysqli_num_rows($sql);
	
	if ($row > 0) {
		session_start();
		$_SESSION['EmailUsuario'] = $_POST['EmailUsuario'];
		$_SESSION['SenhaUsuario'] = $_POST['SenhaUsuario'];
		echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
		echo "<script>loginsuccessfully()</script>";
	}
	else{
		echo "<center>Nome de usuário ou senha inválido! Aguarde um instante.</center>";
		echo "<script>loginfailed()</script>";
	}
	?>

</body>
</html>