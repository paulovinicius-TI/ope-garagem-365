<?php 
	include "../model/conexao.php";
	$query = "SELECT * FROM cliente";
	$result1 = mysqli_query($conexao, $query);
?>