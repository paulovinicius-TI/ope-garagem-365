<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php 
      include "menu.php";
      include "../controller/ClienteEmPedido.php";
      include "../controller/ProdutosEmPedido.php";
    ?>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  </head>
  <body id="top" data-spy="scroll">
    
<?php 
  include "../model/formPedidos/formulario1.php";
  include "../model/formPedidos/formulario2.php";
  include "../model/formPedidos/formulario3.php";
?>

  <!-- jQuery -->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/jquery.flexslider.js"></script>
      <script src="../assets/js/jquery.inview.js"></script>
      <script src="../assets/js/script.js"></script>
      <script src="contactform/contactform.js"></script> 
  </body>
</html>