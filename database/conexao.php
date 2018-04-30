<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexão = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexão, $banco) or die(mysqli_error());
?>