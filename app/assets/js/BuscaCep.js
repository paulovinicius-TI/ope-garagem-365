    function limpa_formulário_cep() {

      document.getElementById('logradouro-cliente').value=("");
      document.getElementById('bairro-cliente').value=("");
      document.getElementById('cidade-cliente').value=("");
    }

    function meu_callback(conteudo) {
      if (!("erro" in conteudo)) {
        document.getElementById('logradouro-cliente').value=(conteudo.logradouro);
        document.getElementById('bairro-cliente').value=(conteudo.bairro);
        document.getElementById('cidade-cliente').value=(conteudo.localidade);
        }
        else {
          limpa_formulário_cep();
          alert("CEP não encontrado.");
        }
      }

      function pesquisacep(valor) {

        var cep = valor.replace(/\D/g, '');

        if (cep != "") {

          var validacep = /^[0-9]{8}$/;

          if(validacep.test(cep)) {

            document.getElementById('logradouro-cliente').value="carregando...";
            document.getElementById('bairro-cliente').value="carregando...";
            document.getElementById('cidade-cliente').value="carregando...";

            var script = document.createElement('script');

            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            document.body.appendChild(script);

            }
            else {

                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
              }
        } 
        else {

            limpa_formulário_cep();
          }
        };
