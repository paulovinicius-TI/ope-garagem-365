<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php 
  include "menu.php";
  include "../controller/UrlRestritaLogado.php";
  include "../model/conexao.php"; 
  $sql = "SELECT * FROM funcionario";
  $retorno = mysqli_query($conexao, $sql) or die ('Erro');
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <title>Cadastro de Usuário - Garagem</title>

</head>
<body id="top" data-spy="scroll">

<button type="button" class="btn btn-lg see-cad" data-toggle="modal" data-target="#myModal">Cadastrados</button>

  <form name="meuForm" method="POST" id="formulario" action="../controller/CriacaoDeUsuario.php">
    <div class="box box-cadastro-usuario"> 

      <h1><center><i class="fas fa-address-card menu-icons"></i>Cadastro de usuário</center></h1>

      <label> 
        <span>Nome</span>
        <input type="text" class="input-text" name="nome" id="nome" placeholder="Nome" />
        <input type="text" class="input-text" name="snome" id="snome" placeholder="Sobrenome" />

      </label>


      <label>
        <span>CPF</span>
        <input type="text" class="input-text js-cpf-mascara" name="cpf" id="cpf" placeholder="000.000.000-00" />
      </label>

      <label>
        <span>Email</span>
        <input type="email" class="input-text" name="email" id="email" placeholder="exemplo@exemplo.com" />
      </label>
      <label>
        <span>Senha</span>
        <input type="password" class="input-text" name="senha" id="senha" placeholder="senha" />
      </label>
      <label class="button-cadastrar-usuario">
        <input type="submit" class="button" id="button-cadastrar-usuario" value="Cadastrar" />
      </label>           
    </div>
  </form>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Usuários Cadastrados</h4>
      </div>
      <div class="modal-body">
        <?php
          include "usuarios.php";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
<script src="../assets/js/jquery.mask.min.js"></script>
</html>