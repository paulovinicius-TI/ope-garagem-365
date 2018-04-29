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
    <div class="AddProd"> 
      <input type="submit" class="button btn-novo-pedido" value="Novo Pedido" onclick="adicionar()" />
    </div>
    
    <form name="meuForm" method="post" class="form-pedido" id="form-pedido">
      <div class="box box-pedido"> 
    	  <h1><center><i class="fas fa-address-card menu-icons"></i>Pedido Nº 12</center></h1>
	      
        <label class="qtd-produto"><span>10</span></label>        
        <label> 
          <span>Coca-cola 350ml</span>
        </label>
        <label class="valor-produto"> 
          <span>R$ 12,50</span>
        </label>
	      <input type="button" class="button button-remover-do-pedido" value="x" />


        
        <label class="qtd-produto"><span>10</span></label>        
        <label>
          <span>Saundíche Americano</span>
        </label>
        <label class="valor-produto"> 
          <span>R$ 12,50</span>
        </label>
	      <input type="button" class="button button-remover-do-pedido" value="x" />
        
        

        <label class="qtd-produto"><span>10</span></label>        
        <label>	      
          <span>Skol 700ml</span>
        </label>
        <label class="valor-produto"> 
          <span>R$ 12,50</span>
        </label>
	      <input type="button" class="button button-remover-do-pedido" value="x" />
        <label class="label label-adc-produto">
          <input type="text" class="adicionar-ao-pedido-qtd" placeholder="Qtd." />
          <input type="text" class="adicionar-ao-pedido" placeholder="adicionar ao pedido" />
		      <input type="button" class="button" value="adicionar" />

        </label> 
        <label class="label label-button">
        	<span class="valor-total">Valor total: R$ 25,65</span>
		      <input type="button" class="button button-cancelar" value="Fechar Pedido" />
        </label>         
      </div>
    </form>


<script>
var regex = /^(.+?)(\d+)$/i;
var cloneIndex = $(".form-pedido1").length;

$("button.adicionar").live("click", function(){
    $(this).parents(".form-pedido1").clone()
        .appendTo("body")
        .attr("id", "form-pedido1" +  cloneIndex)
        .find("*").each(function() {
            var id = this.id || "";
            var match = id.match(regex) || [];
            if (match.length == 3) {
                this.id = match[1] + (cloneIndex);
            }
    });
    cloneIndex++;
});

</script>
  <!-- jQuery -->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/jquery.flexslider.js"></script>
      <script src="../assets/js/jquery.inview.js"></script>
      <script src="../assets/js/script.js"></script>
      <script src="contactform/contactform.js"></script> 
  </body>
</html>