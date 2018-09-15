<form name="meuForm" method="post" class="form-pedido" id="form-pedido">
  <div class="box box-pedido"> 
    <h1><center><i class="fas fa-address-card menu-icons"></i>Pedido Nº 1</center></h1>
        <?php 
				  include "../controller/ClienteEmPedido.php";
				  include "../controller/ProdutosEmPedido.php";
				?>
    <select class="ClientInOrder" id="ClientInOrder"><option value=""></option>
      <?php while ($row1 = mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[1];?></option>
      <?php endwhile;?>
    </select>

    <div id="RowPedidos">
      <div id="CloneRow">
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd1"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod1"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd1" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd2"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod2"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd2" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd3"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod3"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd3" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd4"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod4"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd4" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd5"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod5"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd5" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

      <span class="valor-total">Valor total: R$ 25,65</span>

    <label class="label label-button">
      <input type="button" class="button button-cancelar" value="Fechar Pedido" onclick="saveTextAsFile1()" />
    </label>         
  </div>

    </form>

<script type="text/javascript">
function saveTextAsFile1() {
  var jcontent= [{
    NomeCliente : document.getElementById("ClientInOrder").value,
    Produto : document.getElementById("Prod").value,
    QtdComprada : document.getElementById("Qtd").value,
    ValorUnit : document.getElementById("ValorProd").value,
  },
  {
    Produto : document.getElementById("Prod1").value,
    QtdComprada : document.getElementById("Qtd1").value,
    ValorUnit : document.getElementById("ValorProd1").value,
  },
  {
    Produto : document.getElementById("Prod2").value,
    QtdComprada : document.getElementById("Qtd2").value,
    ValorUnit : document.getElementById("ValorProd2").value,
  },
  {
    Produto : document.getElementById("Prod3").value,
    QtdComprada : document.getElementById("Qtd3").value,
    ValorUnit : document.getElementById("ValorProd3").value,
  },
  {
    Produto : document.getElementById("Prod4").value,
    QtdComprada : document.getElementById("Qtd4").value,
    ValorUnit : document.getElementById("ValorProd4").value,
  },
  {
    Produto : document.getElementById("Prod5").value,
    QtdComprada : document.getElementById("Qtd5").value,
    ValorUnit : document.getElementById("ValorProd5").value,
  }];


  var myJSON = JSON.stringify(jcontent);
  var textToWrite = myJSON;
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