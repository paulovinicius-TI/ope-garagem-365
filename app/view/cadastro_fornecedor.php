<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php 
  include "menu.php";
  include "../controller/UrlRestritaLogado.php";
  ?>
  <script src="../assets/js/BuscaCep.js"></script>
  <script src="../assets/js/jquery.mask.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <title>Cadastro de Fornecedor - Garagem</title>

</head>
<body id="top" data-spy="scroll">

  <form name="FormForn" method="post" id="FormFornecedor" action="../controller/CadastroFornecedor.php">
    <div class="box box-cadastro-fornecedor"> 
      <h1><center><i class="fas fa-address-card menu-icons"></i>Cadastro de fornecedor</center></h1>

      <label> 
        <span>Nome</span>
        <input type="text" class="input-text" id="nome-fornecedor" name="nome-fornecedor" placeholder="Nome" />
      </label>

      <label>
        <span>Descrição</span>
        <textarea class="input-text" id="descricao-fornecedor" name="descricao-fornecedor" rows="2"></textarea>
      </label>   

      <label>
        <span>Endereço</span>
        <input type="text" class="input-text js-cep-mascara" id="cep-cliente"  placeholder="CEP" name="cep-cliente" onblur="pesquisacep(this.value);"  />
        <input type="text" class="input-text" id="logradouro-cliente" name="logradouro-cliente" placeholder="logradouro" readonly/>
        <input type="text" class="input-text" id="numero-end-fornecedor" name="numero-end-fornecedor" placeholder="Nº" />
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
      <label class="button-cadastrar-fornecedor">
        <input type="submit" class="button" id="button-cadastrar-fornecedor" value="Cadastrar" />
      </label>           
    </div>

  </form>
</body>
</html>