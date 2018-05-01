<!DOCTYPE html>
<html>
<head>
  <?php
    include "../controller/AcessoRestrito.php";
  ?>
  <script src="../assets/js/jquery-3.2.1.min.js"></script>
  <script src="../assets/js/jquery.mask.min.js"></script>
  <script src="../assets/js/mascaras.js"></script>
  <script src="../assets/js/messages.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/flexslider.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/font-awesome/css/fontawesome-all.min.css">

</head>
  <body id="top" data-spy="scroll">
    <div class="horizontal-menu">
    </div>
    <!-- Aqui é o menu no desktop -->
    <header id="home" class="hidden-xs">
      <div class="vertical-menu">
      <div class="welcome-username">        
      <?php
        include "../model/conexao.php";
        $email = $_SESSION['EmailUsuario'];
        $dados = mysqli_query($conexao, "SELECT * FROM funcionario WHERE email = '$email'");
        $funcionario = mysqli_fetch_array($dados);
        echo 'Seja bem-vindo: '.$funcionario['nome'];
      ?>
      </div>
        <img class="logo-menu" src="../assets/images/logo.png">
        <a href="cadastro_usuario.php" class="btnMenu"><i class="fas fa-user-plus menu-icons"></i>Usuários</a>
        <a href="cadastro_cliente.php" class="btnMenu"><i class="fas fa-address-card menu-icons"></i>Clientes</a>
        <a href="pedidos.php" class="btnMenu"><i class="fas fa-notes-medical menu-icons"></i></i>Pedidos</a>
        <a href="estoque.php" class="btnMenu"><i class="fas fa-box-open menu-icons"></i>Estoque</a>
        <a href="" class="btnMenu"><i class="fas fa-dollar-sign menu-icons"></i>Controle de Lucro</a>
        <a href="usuarios.php" class="btnMenu"><i class="fas fa-dollar-sign menu-icons"></i>Usuarios do sistema</a>
        <a href="../controller/logout.php" class="btnMenu"><i class="fas fa-sign-out-alt menu-icons"></i>Sair</a>
      </div>
    </header>
    <!-- Aqui é o menu no mobile -->
    <header id="MobileHome" class="hidden-lg">
      <div class="toggle-btn" onclick="toggleSideBar()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="vertical-menu">
      <div class="welcome-username">        
      <?php
        include "../model/conexao.php";
        $email = $_SESSION['EmailUsuario'];
        $dados = mysqli_query($conexao, "SELECT * FROM funcionario WHERE email = '$email'");
        $funcionario = mysqli_fetch_array($dados);
        echo 'Seja bem-vindo: '.$funcionario['nome'];
      ?>
        <img class="logo-menu" src="../assets/images/logo.png">
        <a href="cadastro_usuario.php" class="btnMenu"><i class="fas fa-user-plus menu-icons"></i>Usuários</a>
        <a href="cadastro_cliente.php" class="btnMenu"><i class="fas fa-address-card menu-icons"></i>Clientes</a>
        <a href="pedidos.php" class="btnMenu"><i class="fas fa-notes-medical menu-icons"></i></i>Pedidos</a>
        <a href="estoque.php" class="btnMenu"><i class="fas fa-box-open menu-icons"></i>Estoque</a>
        <a href="" class="btnMenu"><i class="fas fa-dollar-sign menu-icons"></i>Controle de Lucro</a>
        <a href="../controller/logout.php" class="btnMenu"><i class="fas fa-sign-out-alt menu-icons"></i>Sair</a>
      </div>
    </header>

    <script type="text/javascript">
      function toggleSideBar(){
        document.getElementById("MobileHome").classList.toggle("active");
      }
    </script>
  </body>
</html>