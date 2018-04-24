<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
	$conexão = mysqli_connect($host, $user, $pass) or die(mysqli_error());
	mysqli_select_db($conexão, $banco) or die(mysqli_error());
?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function loginsuccessfully(){
	setTimeout("window.location='cadastro_usuario.php'", 1000);
}

function loginfailed(){
	setTimeout("window.location='index.php'", 1000);
}
</script>
</head>
<body>


<?php
$email = $_POST['EmailUsuario'];
$senha = $_POST['SenhaUsuario'];
$sql = mysqli_query($conexão,"SELECT * FROM funcionario WHERE email = '$email' and senha = '$senha'") or die(mysqli_error());
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