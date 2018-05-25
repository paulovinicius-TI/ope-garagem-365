<!DOCTYPE html>
<html>
<head>
  <?php
	include "../controller/AcessoRestrito.php";
  ?>
  <script src="../assets/js/messages.js"></script>
	<script src="../assets/js/BuscaCep.js"></script>
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/jquery.mask.min.js"></script>
	<script src="../assets/js/mascaras.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
			include "../controller/WelcomeUser.php";
		  ?>
		  </div>
		<img class="logo-menu" src="../assets/images/logo.png">
	  <?php
			include '../controller/MenuRestrito.php';
	  ?>
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
		include "../controller/WelcomeUser.php";
	  ?>
		<img class="logo-menu" src="../assets/images/logo.png">
	  <?php
			include '../controller/MenuRestrito.php';
	  ?>
	  </div>
	</header>

	<script type="text/javascript">
	  function toggleSideBar(){
		document.getElementById("MobileHome").classList.toggle("active");
	  }
	</script>
  </body>
</html>