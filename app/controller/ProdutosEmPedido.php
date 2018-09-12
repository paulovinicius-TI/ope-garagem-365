<?php 
	include "../model/conexao.php";
	$query = "SELECT * FROM produto";
	$result2 = mysqli_query($conexao, $query);
?>