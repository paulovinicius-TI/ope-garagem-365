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
    
    <title>Cadastro de Usuário - Garagem</title>

  </head>
  <body id="top" data-spy="scroll">
    <form name="meuForm" method="POST" id="formulario" action="../controller/CriacaoDeUsuario.php">
    <div class="box"> 
      <h1><center><i class="fas fa-address-card menu-icons"></i>Cadastro de usuário</center></h1>
 
    <label> 
      <span>Nome</span>
      <input type="text" class="nome" name="nome" id="nome" placeholder="Nome" />
      <input type="text" class="snome" name="snome" id="snome" placeholder="Sobrenome" />
 
    </label>
 

    <label>
      <span>CPF</span>
      <input type="text" class="cpf" name="cpf" id="cpf" placeholder="000.000.000-00" />
    </label>

    <label>
      <span>Email</span>
      <input type="email" class="input_text" name="email" id="email" placeholder="exemplo@email.com" />
    </label>
    <label>
      <span>Senha</span>
      <input type="password" class="input_text" name="senha" id="senha" placeholder="senha" />
    </label>
    <label>
      <input type="submit" class="button" value="Cadastrar" />
    </label>           
  </div>
</form>
  </body>
</html>