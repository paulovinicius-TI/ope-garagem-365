<?php
$host = "localhost";
$user = "u928575897_serv";
$pass = "projetoope";
$banco = "u928575897_garag";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
