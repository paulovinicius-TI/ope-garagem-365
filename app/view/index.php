<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <title>Login - Garagem</title>
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
    <script src="../assets/js/PasswordToggle.js"></script>
    <link rel="stylesheet" href="../assets/css/flexslider.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/font-awesome/css/fontawesome-all.min.css">
  </head>
  <body id="top" data-spy="scroll">
    <form name="meuForm" method="post" id="formulario" action="../controller/AutenticacaoDeUsuario.php">
      <div class="box login-box"> 
        <img class="logo-login" src="../assets/images/logo.png">
        <h1><center></i>Login</center></h1>
        <label>
          <span>Email</span>
          <input type="email" required class="input-text" name="EmailUsuario" id="UserName" placeholder="exemplo@exemplo.com" />
        </label>
        <label>
          <span>Senha</span>
          <input type="password" required class="input-text" name="SenhaUsuario" id="UserPass" placeholder="Senha" />
          <i class="fas fa-eye" onclick="TogglePass()"></i>
        </label>
        <label class="btn-login">
          <input type="submit" class="button" value="Login" />
        </label>           
      </div>
    </form>
  </body>
</html>