<form name="meuForm" method="post" class="form-pedido" id="form-pedido">
  <div class="box box-pedido"> 
    <h1><center><i class="fas fa-address-card menu-icons"></i>Pedido Nº 2</center></h1>
        <?php 
				  include "../controller/ClienteEmPedido.php";
				  include "../controller/ProdutosEmPedido.php";
				?>
    <select class="ClientInOrder2 ClientInOrder" id="ClientInOrder2"><option value=""></option>
      <?php while ($row1 = mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[1];?></option>
      <?php endwhile;?>
    </select>

    <div id="RowPedidos">
      <div id="CloneRow">
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd6"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod6"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd6" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd7"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod7"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd7" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd8"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod8"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd8" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd9"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod9"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd9" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd10"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod10"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd10" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd11"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod11"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd11" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

      <span class="valor-total">Valor total: R$ 25,65</span>

    <label class="label label-button">
      <input type="button" class="button button-cancelar" value="Fechar Pedido" onclick="saveTextAsFile2()" />
    </label>         
  </div>

    </form>

<script type="text/javascript">
function saveTextAsFile2() {
  var jcontent= [{
    NomeCliente : document.getElementById("ClientInOrder2").value,
    Produto : document.getElementById("Prod6").value,
    QtdComprada : document.getElementById("Qtd6").value,
    ValorUnit : document.getElementById("ValorProd6").value,
  },
  {
    Produto : document.getElementById("Prod7").value,
    QtdComprada : document.getElementById("Qtd7").value,
    ValorUnit : document.getElementById("ValorProd7").value,
  },
  {
    Produto : document.getElementById("Prod8").value,
    QtdComprada : document.getElementById("Qtd8").value,
    ValorUnit : document.getElementById("ValorProd8").value,
  },
  {
    Produto : document.getElementById("Prod9").value,
    QtdComprada : document.getElementById("Qtd9").value,
    ValorUnit : document.getElementById("ValorProd9").value,
  },
  {
    Produto : document.getElementById("Prod10").value,
    QtdComprada : document.getElementById("Qtd10").value,
    ValorUnit : document.getElementById("ValorProd10").value,
  },
  {
    Produto : document.getElementById("Prod11").value,
    QtdComprada : document.getElementById("Qtd11").value,
    ValorUnit : document.getElementById("ValorProd11").value,
  }];


  var myJSON = JSON.stringify(jcontent);
  var textToWrite = myJSON;
  var textFileAsBlob = new Blob([textToWrite], {
    type: 'text/plain'
  });

  var fileNameToSaveAs = document.getElementById("ClientInOrder2").value;

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