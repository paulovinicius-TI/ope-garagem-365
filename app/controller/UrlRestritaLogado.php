<?php
if ($funcionario['tipo'] < 1) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: cadastro_cliente.php"); 
  exit;
}
?>