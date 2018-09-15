<form name="meuForm" method="post" id="formulario" action="../controller/CadastroCliente.php">
    <div class="box box-cadastro-cliente"> 
      <h1><center><i class="fas fa-address-card menu-icons"></i>Cadastro de cliente</center></h1>

      <label> 
        <span>Nome</span>
        <input type="text" class="input-text" id="nome-cliente" name="nome-cliente" placeholder="Nome" />
        <input type="text" class="input-text" id="snome-cliente" name="snome-cliente" placeholder="Sobrenome" />
      </label>

      <label>
        <span>CPF</span>
        <input type="text" class="input-text js-cpf-mascara" id=" cpf-cliente " name="cpf-cliente" placeholder="000.000.000-00" />
      </label>

      <label>
        <span>Endereço</span>
        <input type="text" class="input-text js-cep-mascara" id="cep-cliente"  placeholder="CEP" name="cep-cliente" onblur="pesquisacep(this.value);"  />
        <input type="text" class="input-text" id="logradouro" name="logradouro-cliente" placeholder="logradouro" readonly/>
        <input type="text" class="input-text" id="numero" name="numero-end-cliente" placeholder="Nº" />
        <input type="text" class="input-text" id="bairro" name="bairro-cliente" placeholder="Bairro" readonly />
        <input type="text" class="input-text" id="cidade" name="cidade-cliente" placeholder="Cidade" readonly/>

      </label>
      <label>
        <span>Telefone</span>
        <input  type="text" class="input-text  js-celular-mascara" name="tel" id="tel" placeholder="(00)00000-0000" />
      </label>
      
      <label>
        <span>Email</span><input type="email" class="input-text" name="email" id="email" placeholder="exemplo@exemplo.com" />
      </label>
      <label class="button-cadastrar-cliente">
        <input type="submit" class="button" id="button-cadastrar-cliente" value="Cadastrar" />
      </label>           
    </div>

  </form>