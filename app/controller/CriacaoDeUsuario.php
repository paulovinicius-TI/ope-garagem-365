<?php 
  include "../model/conexao.php";

  $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : false;
  $nome = isset($_POST['nome']) ? $_POST['nome'] : false;
  $sobrenome = isset($_POST['snome']) ? $_POST['snome'] : false;
  $senha = isset($_POST['senha']) ? $_POST['senha'] : false;
  $email = isset($_POST['email']) ? $_POST['email'] : false;
  $sql = mysqli_query($conexão, "INSERT INTO funcionario(cpf, nome, sobrenome, senha, email) 
  VALUES('$cpf', '$nome', '$sobrenome', '$senha', '$email')");
  echo "<h1>asdasdasdasdas</h1>";
  header("Location: ../view/cadastro_usuario.php");
?>