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
    <div class="AddProd"> 
      <input type="submit" class="button btn-novo-pedido" value="Novo Pedido" onclick="adicionar()" />
    </div>
    
    <form name="meuForm" method="post" class="form-pedido" id="form-pedido">
      <div class="box box-pedido"> 
    	  <h1><center><i class="fas fa-address-card menu-icons"></i>Pedido Nº 12</center></h1>
	      
        <select class="ClientInOrder" id="ClientInOrder"><option value=""></option>
          <?php while ($row1 = mysqli_fetch_array($result1)):;?>
            <option><?php echo $row1[1];?></option>
          <?php endwhile;?>
        </select>

        <div id="RowPedidos">
          <div id="CloneRow">
            <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd"></input>      

            <select class="adicionar-ao-pedido-nome"><option value=""></option>
              <?php while ($row2 = mysqli_fetch_array($result2)):;?>
                <option><?php echo $row2[1];?></option>
              <?php endwhile;?>
            </select>


            <input type="number" class="adicionar-ao-pedido-valor" placeholder="R$"></input>
            <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" />
          
          </div>
        </div>

        <label class="label label-button">
        	<span class="valor-total">Valor total: R$ 25,65</span>
		      <input type="button" class="button button-cancelar" value="Fechar Pedido" onclick="saveTextAsFile()" />
        </label>         
      </div>

    </form>


<script>

  function clonarLinha(){
    var row = document.getElementById("CloneRow");
    var table = document.getElementById("RowPedidos");
    var clone = row.cloneNode(true);
    var inputsClone = clone.getElementsByTagName('input');
    for (var i = 0; i < inputsClone.length; i++) {
       inputsClone[i].value = '';
    }
    clone.id = "CloneRow";
    table.appendChild(clone);

  }

function saveTextAsFile() {
  var textToWrite = document.getElementById("Qtd").value;
  var textFileAsBlob = new Blob([textToWrite], {
    type: 'text/plain'
  });
  var fileNameToSaveAs = document.getElementById("ClientInOrder").value;

  var downloadLink = document.createElement("a");
  downloadLink.download = fileNameToSaveAs;
  downloadLink.innerHTML = "Download File";
  if (window.webkitURL != null) {
    // Chrome allows the link to be clicked
    // without actually adding it to the DOM.
    downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
  } else {
    // Firefox requires the link to be added to the DOM
    // before it can be clicked.
    downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
    downloadLink.onclick = destroyClickedElement;
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
  }

  downloadLink.click();
}

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