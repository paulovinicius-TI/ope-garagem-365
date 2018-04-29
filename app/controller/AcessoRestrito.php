<?php
  session_start();
  if (!isset($_SESSION['EmailUsuario']) AND !isset($_SESSION['SenhaUsuario'])) {
    header("Location: index.php");
    exit;        
  }
?>