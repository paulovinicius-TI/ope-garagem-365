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
    <div class="box"> 
      <h1><center><i class="fas fa-address-card menu-icons"></i>Cadastro de cliente</center></h1>
 
    <label> 
      <span>Nome</span>
      <input type="text" class="nome" name="nome" id="nme" placeholder="Nome" />
      <input type="text" class="snome" name="nome" id="name" placeholder="Sobrenome" />
 
    </label>
 
    <label>
      <span>Endereço</span>
      <input type="text" class="rua" name="endereco" id="endereco" placeholder="Rua" />
      <input type="text" class="bairro" name="endereco" id="endereco" placeholder="Bairro" />
     </label>
 

    <label>
      <span>Telefone</span>
      <input type="text" class="input_text" name="tel" id="tel" placeholder="(00) 00000-0000" />
    </label>

    <label>
      <span>Email</span>
      <input type="email" class="input_text" name="email" id="email" placeholder="exemplo@email.com" />
    </label>
 
    <label>
       
      <input type="button" class="button" value="Cadastrar" />
    </label>           
  </div>
</form>



  </body>
</html>