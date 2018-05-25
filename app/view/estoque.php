<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php 
  include "menu.php";
  include "../controller/UrlRestritaLogado.php";
  include "../model/conexao.php"; 
  $sql = "SELECT * FROM produto";
  $retorno = mysqli_query($conexao, $sql) or die ('Erro');
    ?>
    <script src="../assets/js/jquery.mask.min.js"></script>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <title>Estoque - Garagem</title>

  </head>
  <body id="top" data-spy="scroll">
    <form name="EstoqueForm" method="POST" id="formularioEstoque" action="../controller/SalvaEstoque.php">
      <div class="AddProd"> 
        <!-- <input type="button" class="button btn-adicionar" onclick="clonarLinha()" value="Adicionar Produto"/> -->
        <input type="submit" class="button btn-salvar" value="Salvar"/>
      </div>

      <table class="TabelaEstoque" id="tabela-estoque">
        <tr>
          <th>Controle De Estoque</th>
        </tr>

        <tr>
          <th>Nome</th>
          <th>Preço Unidade</th>
          <th>Quantidade</th>
          <th>Descrição</th>
          <th>Código</th>
          <th>Total</th>
        </tr>
        <tr id="linhaParaClonar">
          <td><input type="text" name="NomeProd"></td>
          <td><input type="text" class="js-mask-money" name="PrecoProd" placeholder="R$"></td>
          <td><input type="number" name="QTDProd"></td>
          <td><textarea id="DescProd" name="DescricProd" rows="1"></textarea></td>
          <td><input type="number" name="CodProd"></td>
          <td><input type="number" readonly="" name="Total"></td>
        </tr>
          <?php
          while ($registro = mysqli_fetch_array($retorno)){
            $codigo = $registro['codigo'];
            $nome = $registro['nome'];
            $preco_unid = $registro['preco_unid'];
            $qtd = $registro['qtd'];
            $descricao = $registro['descricao'];
            $soma = $preco_unid * $qtd;

            echo '<td><input type="text" readonly value='. $nome .'></td>';
            echo '<td><input type="text" readonly class="js-mask-money" placeholder="R$" value="R$ '. $preco_unid .'"></td>';
            echo '<td><input type="number" readonly value='. $qtd .'></td>';
            echo '<td><textarea id="DescProd" readonly rows="1">'.$descricao.'</textarea></td>';
            echo '<td><input type="number" readonly value='. $codigo .'></td>';
            echo '<td><span>R$ '.$soma.'</span></td>';
            echo '</tr>';
          }
          mysqli_close($conexao);
          echo "</table>";
          echo "</tr>";
          echo "</table>";
          ?>
    </form>
<!-- <script>
  function clonarLinha(){
    var row = document.getElementById("linhaParaClonar");
    var table = document.getElementById("tabela-estoque");
    var clone = row.cloneNode(true);
    clone.id = "linhaClonada";
    table.appendChild(clone);
  }
  </script> -->
  </body>
</html>