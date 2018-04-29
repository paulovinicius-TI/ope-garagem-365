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
    
    <title>Cadastro de Cliente - Garagem</title>

  </head>
  <body id="top" data-spy="scroll">
    
    <form name="meuForm" method="post" id="formulario">
    <div class="box box-cadastro-cliente"> 
      <h1><center><i class="fas fa-address-card menu-icons"></i>Cadastro de cliente</center></h1>
 
    <label> 
      <span>Nome</span>
      <input type="text" class="input-text" id="nome-cliente" placeholder="Nome" />
      <input type="text" class="input-text" id="snome-cliente" placeholder="Sobrenome" />
    </label>

    <label>
      <span>CPF</span>
      <input type="text" class="input-text" id="cpf-cliente" placeholder="000.000.000-00" />
    </label>
 
    <label>
      <span>Endereço</span>
      <input type="text" class="input-text" id="cep-cliente" placeholder="CEP" />
      <input type="text" class="input-text" id="logradouro-cliente" placeholder="logradouro" />
      <input type="text" class="input-text" id="numero-end-cliente" placeholder="Nº" />
      <input type="text" class="input-text" id="bairro-cliente" placeholder="Bairro" />
     </label>
 

    <label>
      <span>Telefone</span>
      <input type="text" class="input-text" name="tel" id="tel" placeholder="(00)00000-0000" />
    </label>
      
      <label>
        <span>Email</span><input type="email" class="input-text" name="email" id="email" placeholder="exemplo@exemplo.com" />
      </label>



 
    <label class="button-cadastrar-cliente">
      <input type="button" class="button" id="button-cadastrar-cliente" value="Cadastrar" />
    </label>           
  </div>

</form>



  </body>
</html>