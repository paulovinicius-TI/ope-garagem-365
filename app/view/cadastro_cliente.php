<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php 
  include "menu.php";
  ?>
  <script src="../assets/js/BuscaCep.js"></script>
  <script src="../assets/js/jquery.mask.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <title>Cadastro de Cliente - Garagem</title>

</head>
<body id="top" data-spy="scroll">

  <button type="button" class="btn btn-lg see-cad" data-toggle="modal" data-target="#myModal">Cadastrados</button>

  <form name="meuForm" method="post" id="formulario" action="../controller/CadastroCliente.php">
    <div class="box box-cadastro-cliente"> 
      <h1><center><i class="fas fa-address-card menu-icons"></i>Cadastro de cliente</center></h1>

      <label> 
        <span>Nome</span>
        <input type="text" class="input-text" id="nome-cliente" name="nome-cliente" placeholder="Nome" />
        <input type="text" class="input-text" id="snome-cliente" name="snome-cliente" placeholder="Sobrenome" />
      </label>

      <label>
        <span>CPF</span>
        <input type="text" class="input-text js-cpf-mascara" id=" cpf-cliente " name="cpf-cliente" placeholder="000.000.000-00" />
      </label>

      <label>
        <span>Endereço</span>
        <input type="text" class="input-text js-cep-mascara" id="cep-cliente"  placeholder="CEP" name="cep-cliente" onblur="pesquisacep(this.value);"  />
        <input type="text" class="input-text" id="logradouro-cliente" name="logradouro-cliente" placeholder="logradouro" readonly/>
        <input type="text" class="input-text" id="numero-end-cliente" name="numero-end-cliente" placeholder="Nº" />
        <input type="text" class="input-text" id="bairro-cliente" name="bairro-cliente" placeholder="Bairro" readonly />
        <input type="text" class="input-text" id="cidade-cliente" name="cidade-cliente" placeholder="Cidade" readonly/>

      </label>
      <label>
        <span>Telefone</span>
        <input  type="text" class="input-text  js-celular-mascara" name="tel" id="tel" placeholder="(00)00000-0000" />
      </label>
      
      <label>
        <span>Email</span><input type="email" class="input-text" name="email" id="email" placeholder="exemplo@exemplo.com" />
      </label>
      <label class="button-cadastrar-cliente">
        <input type="submit" class="button" id="button-cadastrar-cliente" value="Cadastrar" />
      </label>           
    </div>

  </form>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Clientes Cadastrados</h4>
      </div>
      <div class="modal-body">
        <?php
          include "clientes.php";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>