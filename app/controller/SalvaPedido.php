<?php 
  include "../model/conexao.php";

  $status = isset($_POST['ComandaStatus']) ? $_POST['ComandaStatus'] : false;
  $nome = isset($_POST['ClienteName']) ? $_POST['ClienteName'] : false;
  $sql = mysqli_query($conexao, "INSERT INTO pedido(status, cpf_cliente) 
  VALUES('$status', '$nome')");
?>