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
    
    <title>Estoque - Garagem</title>

  </head>
  <body id="top" data-spy="scroll">
    <div class="AddProd"> 
      <input type="submit" class="button btn-adicionar" onclick="clonarLinha()" value="Adicionar Produto"/>
      <input type="submit" class="button btn-salvar" value="Salvar"/>
    </div>

    <table class="TabelaEstoque" id="tabela-estoque">
      <tr>
        <th>Controle De Estoque</th>
      </tr>

      <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Descrição</th>

      </tr>
      <tr id="linhaParaClonar">
        <td><input type="text" name="NomeProd"></td>
        <td><input type="text" class="js-mask-money" name="PrecoProd"></td>
        <td><input type="text" name="QTDProd"></td>
        <td><textarea id="DescProd" rows="1"></textarea></td>
      </tr>
      <tr>
        <td><input type="text" name="NomeProd"></td>
        <td><input type="text" class="js-mask-money" name="PrecoProd"></td>
        <td><input type="text" name="QTDProd"></td>
        <td><textarea id="DescProd" rows="1"></textarea></td>

      </tr>
      <tr>
        <td><input type="text" name="NomeProd"></td>
        <td><input type="text" class="js-mask-money" name="PrecoProd"></td>
        <td><input type="text" name="QTDProd"></td>
        <td><textarea id="DescProd" rows="1"></textarea></td>

      </tr>
      <tr>
        <td><input type="text" name="NomeProd"></td>
        <td><input type="text" class="js-mask-money" name="PrecoProd"></td>
        <td><input type="text" name="QTDProd"></td>
        <td><textarea id="DescProd" rows="1"></textarea></td>

      </tr>
      <tr>
        <td><input type="text" name="NomeProd"></td>
        <td><input type="text" class="js-mask-money" name="PrecoProd"></td>
        <td><input type="text" name="QTDProd"></td>
        <td><textarea id="DescProd" rows="1"></textarea></td>

      </tr>
      <tr>
        <td><input type="text" name="NomeProd"></td>
        <td><input type="text" class="js-mask-money" name="PrecoProd"></td>
        <td><input type="text" name="QTDProd"></td>
        <td><textarea id="DescProd" rows="1"></textarea></td>

      </tr>
      <tr>
        <td><input type="text" name="NomeProd"></td>
        <td><input type="text" class="js-mask-money" name="PrecoProd"></td>
        <td><input type="text" name="QTDProd"></td>
        <td><textarea id="DescProd" rows="1"></textarea></td>

      </tr>
    </table>
<script>
  function clonarLinha(){
    var row = document.getElementById("linhaParaClonar");
    var table = document.getElementById("tabela-estoque");
    var clone = row.cloneNode(true);
    clone.id = "linhaClonada";
    table.appendChild(clone);
  }
  </script>
  </body>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/js/jquery.mask.min.js"></script>
<script src="../assets/js/mascaras.js"></script>
</html>