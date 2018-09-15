<form name="meuForm" method="post" class="form-pedido" id="form-pedido">
  <div class="box box-pedido"> 
    <h1><center><i class="fas fa-address-card menu-icons"></i>Pedido Nº 3</center></h1>
        <?php 
				  include "../controller/ClienteEmPedido.php";
				  include "../controller/ProdutosEmPedido.php";
				?>
    <select class="ClientInOrder3 ClientInOrder" id="ClientInOrder3"><option value=""></option>
      <?php while ($row1 = mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[1];?></option>
      <?php endwhile;?>
    </select>

    <div id="RowPedidos">
      <div id="CloneRow">
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd12"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod12"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd12" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd13"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod13"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd13" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd14"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod14"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd14" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd15"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod15"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd15" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd16"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod16"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd16" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd17"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod17"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd17" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <span class="valor-total">Valor total: R$ 25,65</span>

    <label class="label label-button">
      <input type="button" class="button button-cancelar" value="Fechar Pedido" onclick="saveTextAsFile3()" />
    </label>         
  </div>

    </form>

<script type="text/javascript">
function saveTextAsFile3() {
  var jcontent= [{
    NomeCliente : document.getElementById("ClientInOrder3").value,
    Produto : document.getElementById("Prod12").value,
    QtdComprada : document.getElementById("Qtd12").value,
    ValorUnit : document.getElementById("ValorProd12").value,
  },
  {
    Produto : document.getElementById("Prod13").value,
    QtdComprada : document.getElementById("Qtd13").value,
    ValorUnit : document.getElementById("ValorProd13").value,
  },
  {
    Produto : document.getElementById("Prod14").value,
    QtdComprada : document.getElementById("Qtd14").value,
    ValorUnit : document.getElementById("ValorProd14").value,
  },
  {
    Produto : document.getElementById("Prod15").value,
    QtdComprada : document.getElementById("Qtd15").value,
    ValorUnit : document.getElementById("ValorProd15").value,
  },
  {
    Produto : document.getElementById("Prod16").value,
    QtdComprada : document.getElementById("Qtd16").value,
    ValorUnit : document.getElementById("ValorProd16").value,
  },
  {
    Produto : document.getElementById("Prod17").value,
    QtdComprada : document.getElementById("Qtd17").value,
    ValorUnit : document.getElementById("ValorProd17").value,
  }];


  var myJSON = JSON.stringify(jcontent);
  var textToWrite = myJSON;
  var textFileAsBlob = new Blob([textToWrite], {
    type: 'text/plain'
  });

  var fileNameToSaveAs = document.getElementById("ClientInOrder3").value;

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