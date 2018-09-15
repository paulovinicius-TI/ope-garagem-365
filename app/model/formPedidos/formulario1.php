<form name="meuForm" method="post" class="form-pedido" id="form-pedido" action="../controller/SalvaPedido.php">
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
    <h1><center><i class="fas fa-address-card menu-icons"></i>Pedido Nº 1</center></h1>
        <?php 
				  include "../controller/ClienteEmPedido.php";
				  include "../controller/ProdutosEmPedido.php";
				?>
    <select class="ClientInOrder" id="ClientInOrder" name="ClienteName"><option value=""></option>
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

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
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

      Valor Total: <input type="text" readonly name="TotalPag" value="" id="TotalPag">

    <label class="label" style="width: 32%">
      <input type="submit" class="button button-fechar" value="Fechar Pedido" onclick="saveTextAsFile1()" />
    </label>         
  
    <label class="label" style="width: 38%;margin-left: 70px;">
      <input type="button" class="button button-limpar-comanda" value="Limpar Comanda" onclick="CleanFormOrder()" />
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
  },
  {
    Produto : document.getElementById("Prod6").value,
    QtdComprada : document.getElementById("Qtd6").value,
    ValorUnit : document.getElementById("ValorProd6").value,
  }];

  var Preco = document.getElementById("ValorProd").value;
  var Preco1 = document.getElementById("ValorProd1").value;
  var Preco2 = document.getElementById("ValorProd2").value;
  var Preco3 = document.getElementById("ValorProd3").value;
  var Preco4 = document.getElementById("ValorProd4").value;
  var Preco5 = document.getElementById("ValorProd5").value;
  var Preco6 = document.getElementById("ValorProd6").value;
  var Quant = Number(Preco) + Number(Preco1) + Number(Preco2) + Number(Preco3) + Number(Preco4) + Number(Preco5) + Number(Preco6);
  var TotalQuant = document.getElementById("TotalPag");
  TotalQuant.value = "R$ " + Quant;


  var x = new Date();
  var myJSON = JSON.stringify(jcontent);
  var DataAtual = JSON.stringify(x);
  var currentDate = new Date(JSON.parse(DataAtual));
  var textToWrite = myJSON + currentDate;
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

function CleanFormOrder(){
  if (confirm("Tem certeza que quer apagar essa comanda?")) {
    document.getElementById("form-pedido").reset();
  }

  else {
    return false;
  }
}


</script>