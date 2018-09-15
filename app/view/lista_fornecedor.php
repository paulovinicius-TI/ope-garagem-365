<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php 
  include "menu.php";
  ?>
  <script src="../assets/js/BuscaCep.js"></script>
  <script src="../assets/js/jquery.mask.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <title>Fornecedores cadastrados - Garagem</title>

</head>
<body id="top" data-spy="scroll">

  <button type="button" class="btn btn-lg see-cad" data-toggle="modal" data-target="#myModal">Cadastrar</button>
    <div class="tabela-listar">
        <?php
          include "fornecedores.php";
        ?>

      </div>
    </div>
<div id="myModal" class="modal fade" role="dialog">
 
 <?php include "form_cadastro_fornecedor.php";?>
</div>



</body>
</html>
<!-- 

  <script type="text/javascript">
    $('#alterarClienteModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipientnome = button.data('whatevernome')
      var recipientcpf = button.data('whatevercpf') // Extract info from data-* attributes
      var recipientsobrenome = button.data('whateversobrenome')
      // var recipientcpf = button.data('whatevercpf')
      var recipientcep = button.data('whatevercep')
      var recipientlogradouro = button.data('whateverlogradouro')
      var recipientnumero = button.data('whatevernumero')
      var recipientbairro = button.data('whateverbairro')
      var recipientcidade = button.data('whatevercidade')
      var recipienttelefone = button.data('whatevertelefone')
      var recipientemail = button.data('whateveremail')
      var modal = $(this)
      modal.find('#cpf').val(recipientcpf)
      modal.find('#name').val(recipientnome)
      modal.find('#sobrenome').val(recipientsobrenome)
      modal.find('#cep').val(recipientcep)
      modal.find('#logradouro').val(recipientlogradouro)
      modal.find('#numero').val(recipientnumero)
      modal.find('#bairro').val(recipientbairro)
      modal.find('#cidade').val(recipientcidade)
      modal.find('#telefone').val(recipienttelefone)
      modal.find('#email').val(recipientemail)   
      
    })
  </script>

  <script type="text/javascript">
    $('#excluirClienteModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipientcpf = button.data('whatevercpf') // Extract info from data-* attributes
      var recipientstatus = button.data('whateverstatus')
      var modal = $(this)
      modal.find('#cpf_excluir').val(recipientcpf)
      modal.find('#status_excluir').val(recipientstatus)
    })
  </script> -->