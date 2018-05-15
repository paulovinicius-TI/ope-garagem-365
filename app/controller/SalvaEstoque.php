<?php 
  include "../model/conexao.php";

  $codigo = isset($_POST['CodProd']) ? $_POST['CodProd'] : false;
  $nome = isset($_POST['NomeProd']) ? $_POST['NomeProd'] : false;
  $preco = isset($_POST['PrecoProd']) ? $_POST['PrecoProd'] : false;
  $qtd = isset($_POST['QTDProd']) ? $_POST['QTDProd'] : false;
  $descricao = isset($_POST['DescricProd']) ? $_POST['DescricProd'] : false;
  $sql = mysqli_query($conexao, "INSERT INTO produto(codigo, nome, preco_unid, qtd, descricao) 
  VALUES('$codigo', '$nome', '$preco', '$qtd', '$descricao')");

  header("Location: ../view/estoque.php");
?>