<?php
include "../model/conexao.php";
$email = $_SESSION['EmailUsuario'];
$dados = mysqli_query($conexao, "SELECT * FROM funcionario WHERE email = '$email'");
$funcionario = mysqli_fetch_array($dados);
echo 'Seja bem-vindo: '.$funcionario['nome'];
?>