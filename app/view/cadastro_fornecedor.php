<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php 
  include "menu.php";
  ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <title>Cadastro de Fornecedor - Garagem</title>

</head>
<body id="top" data-spy="scroll">

  <form name="FormForn" method="post" id="FormFornecedor" action="">
    <div class="box box-cadastro-fornecedor"> 
      <h1><center><i class="fas fa-address-card menu-icons"></i>Cadastro de fornecedor</center></h1>

      <label> 
        <span>Nome</span>
        <input type="text" class="input-text" id="nome-fornecedor" name="nome-fornecedor" placeholder="Nome" />
      </label>

      <label>
        <span>Descrição</span>
        <textarea class="input-text" id="descricao-fornecedor" name="descricao-fornecedor" rows="4"></textarea>
      </label>      
    </div>

  </form>
</body>
</html>