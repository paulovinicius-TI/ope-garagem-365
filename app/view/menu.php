<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/flexslider.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/font-awesome/css/fontawesome-all.min.css">

</head>
  <body id="top" data-spy="scroll">
    <header id="home">
      <div class="vertical-menu">
        <img class="logo-menu" src="../assets/images/logo.png">
        <a href="cadastro_usuario.php" class="btnMenu"><i class="fas fa-user-plus menu-icons"></i>Usuários</a>
        <a href="cadastro_cliente.php" class="btnMenu"><i class="fas fa-address-card menu-icons"></i>Clientes</a>
        <a href="pedidos.php" class="btnMenu"><i class="fas fa-notes-medical menu-icons"></i></i>Pedidos</a>
        <a href="estoque.php" class="btnMenu"><i class="fas fa-box-open menu-icons"></i>Estoque</a>
        <a href="" class="btnMenu"><i class="fas fa-dollar-sign menu-icons"></i>Controle de Lucro</a>
        <a href="#" class="btnMenu"><i class="fas fa-sign-out-alt menu-icons"></i>Sair</a>
      </div>
    </header>

    <script type="text/javascript">
      var btns = document.getElementsByClassName("btnMenu");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
    </script>
    <script src="../assets/js/mask.js"></script>

  </body>
</html>