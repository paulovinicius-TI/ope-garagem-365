<form name="meuForm" method="post" class="form-pedido" id="form-pedido" action="../controller/SalvaPedido2.php">
  <div class="box box-pedido"> 

<!--STATUS DA COMANDA-->

<?php
 
(isset($_POST["ComandaStatus"])) ? $ComandaStatus = $_POST["ComandaStatus"] : $ComandaStatus=0;
 
?>

<div class="StatusPedido">
<span>Status: </span>
<select id="ComandaStatus" name="ComandaStatus" class="StatusInOrder">
  <option <?php if ($ComandaStatus == 0 ) echo 'selected' ; ?> value=""></option>
  <option <?php if ($ComandaStatus == 1 ) echo 'selected' ; ?> value="Aberto">Aberto</option>
  <option <?php if ($ComandaStatus == 2 ) echo 'selected' ; ?> value="Fechado">Fechado</option>
</select>
</div>
<!---------->

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

    Valor Total: <input type="text" readonly name="TotalPag1" value="" id="TotalPag1" style="border: none;">

    <label class="label" style="width: 32%">
      <input type="submit" class="button button-cancelar" value="Fechar Pedido" onclick="saveTextAsFile2()" />
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

  var Preco = document.getElementById("ValorProd").value;
  var Preco1 = document.getElementById("ValorProd1").value;
  var Preco2 = document.getElementById("ValorProd2").value;
  var Preco3 = document.getElementById("ValorProd3").value;
  var Preco4 = document.getElementById("ValorProd4").value;
  var Preco5 = document.getElementById("ValorProd5").value;
  var Preco6 = document.getElementById("ValorProd6").value;
  var Quant = Number(Preco) + Number(Preco1) + Number(Preco2) + Number(Preco3) + Number(Preco4) + Number(Preco5) + Number(Preco6);
  var TotalQuant = document.getElementById("TotalPag1");
  TotalQuant.value = Quant;

  var x = new Date();
  var myJSON = JSON.stringify(jcontent);
  var DataAtual = JSON.stringify(x);
  var currentDate = new Date(JSON.parse(DataAtual));
  var textToWrite = myJSON + currentDate;
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