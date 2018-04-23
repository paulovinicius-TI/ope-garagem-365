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
  </head>
  <body id="top" data-spy="scroll">
  	<div class="TesteComanda">
	    <form name="meuForm" method="post" id="formulario_bebida">
	        <div class="box box-abrir-comanda"> 
	          <h1><center><i class="fas fa-address-card menu-icons"></i>Bebidas</center></h1>
	        <label> 
	          <span>Cerveja</span>
	          <input type="text" class="cerveja" name="cerveja" id="cerveja" placeholder="Qtd." />
	        </label>
	        <label>
	          <span>Refrigerante</span>
	          <input type="text" class="refrigerante" name="refrigerante" id="refrigerante" placeholder="Qtd." />
	        </label>

	        <label>
	          <span>Água</span>
	          <input type="text" class="agua" name="agua" id="agua" placeholder="Qtd." />
	        </label>
	        <label class="label-btn">
	          <input type="button" class="button btn-adicionar" value="adicionar" />
	        </label>           
	      </div>
	    </form>

	    <form name="meuForm" method="post" id="formulario_comida">
	        <div class="box box-abrir-comanda"> 
	          <h1><center><i class="fas fa-address-card menu-icons"></i>Comidas</center></h1>
	     
	        <label> 
	          <span>Churrasquinho</span>
	          <input type="text" class="churrasquinho" name="churrasquinho" id="churrasquinho" placeholder="Qtd." />
	        </label>
	        <label>
	          <span>Salgados</span>
	          <input type="text" class="salgados" name="salgados" id="salgados" placeholder="Qtd." />
	        </label>

	        <label>
	          <span>Outro</span>
	          <input type="text" class="outro" name="outro" id="outro" placeholder="Qtd." />
	        </label>
	        <label class="label-btn">
	          <input type="button" class="button btn-adicionar" value="adicionar" />
	        </label>           
	      </div>
	    </form>

	    <form name="meuForm" method="post" id="formulario_combo">
	        <div class="box box-abrir-comanda"> 
	          <h1><center><i class="fas fa-address-card menu-icons"></i>Combos</center></h1>
	     
	        <label> 
	          <span>combo 1</span>
	          <input type="text" class="combo1" name="combo1" id="combo1" placeholder="Qtd." />
	        </label>
	        <label>
	          <span>combo 2</span>
	          <input type="text" class="combo2" name="combo2" id="combo2" placeholder="Qtd." />
	        </label>

	        <label>
	          <span>combo 3</span>
	          <input type="text" class="combo3" name="combo3" id="combo3" placeholder="Qtd." />
	        </label>
	        <label class="label-btn">
	          <input type="button" class="button btn-adicionar" value="adicionar" />
	        </label>           
	      </div>
	    </form>
    </div>

  <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.flexslider.js"></script>
      <script src="js/jquery.inview.js"></script>
      <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
      <script src="js/script.js"></script>
      <script src="contactform/contactform.js"></script> 
  </body>
</html>