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

  <title>Clientes cadastrados - Garagem</title>

</head>
<body id="top" data-spy="scroll">

  <button type="button" class="btn btn-lg see-cad" data-toggle="modal" data-target="#myModal">Cadastrar</button>
    <div class="tabela-listar">
        <?php
          include "clientes.php";
        ?>

      </div>
    </div>
<div id="myModal" class="modal fade" role="dialog">
 
 <?php include "form_cadastro_cliente.php";?>
</div>

<div id="alterarClienteModal" class="modal fade" role="dialog">
<form name="meuForm" method="post" id="formulario" action="../controller/EditaCliente.php">
    <div class="box box-cadastro-cliente"> 
      <h1><center><i class="fas fa-address-card menu-icons"></i>Editar Cliente</center></h1>

      <label> 
        <span>Nome</span>
        <input type="text" class="input-text" id="name" name="nome-cliente" placeholder="Nome" />
        <input type="text" class="input-text" id="sobrenome" name="snome-cliente" placeholder="Sobrenome" />
      </label>

      <label >
        <span>CPF</span>
        <input type="text" class="input-text js-cpf-mascara" id="cpf" name="cpf-cliente" placeholder="000.000.000-00" />

      </label>

      <label>
        <span>Endereço</span>
        <input type="text" class="input-text js-cep-mascara" id="cep"  placeholder="CEP" name="cep-cliente" onblur="pesquisacep(this.value);"  />
        <input type="text" class="input-text" id="logradouro" name="logradouro-cliente" placeholder="logradouro" />
        <input type="text" class="input-text" id="numero" name="numero-end-cliente" placeholder="Nº" />
        <input type="text" class="input-text" id="bairro" name="bairro-cliente" placeholder="Bairro"  />
        <input type="text" class="input-text" id="cidade" name="cidade-cliente" placeholder="Cidade"  />


      </label>
      <label>
        <span>Telefone</span>
        <input  type="text" class="input-text  js-celular-mascara" name="tel" id="telefone" placeholder="(00)00000-0000" />
      </label>
      
      <label>
        <span>Email</span><input type="email" class="input-text" name="email" id="email" placeholder="exemplo@exemplo.com" />
      </label>
      <label class="button-cadastrar-cliente">
        <input type="submit" class="button" id="button-cadastrar-cliente" value="Salvar" />
      </label>           
    </div>

  </form>
</div>



<form name="meuForm" method="post" id="formularioEx" action="../controller/ApagaCliente.php">
  <div id="excluirClienteModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Excluir Cliente?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Tem certeza que deseja apagar este cliente? :( </p>
          <label>
            <span>CPF</span>
            <input type="text" class="input-text js-cpf-mascara" id="cpf_excluir" name="cpf-cliente" placeholder="000.000.000-00" />
             <input type="number" class="input-text" id="status_excluir" name="status" placeholder="deu ruim" />
          </label>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
      </div>
    </div>
  </div>
</form>

</body>
</html>


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
  </script>