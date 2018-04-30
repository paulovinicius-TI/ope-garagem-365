$(document).ready(function() {
	// mascara CPF 
	$(".js-cpf-mascara").mask('000.000.000-00', {reverse: false});
	// mascara CNPJ
	$('.js-cnpj-mascara').mask('00.000.000/0000-00', {reverse: false});
	// mascara RG
	$('.js-rg-mascara').mask('00.000.000-0', {reverse: false});
	// mascara CEP
	$('.js-cep-mascara').mask('00000-000', {reverse: false});
	// mascara telefone
	$('.js-telefone-mascara').mask('(00)0000-0000', {reverse: false});
	// mascara celular
	$('.js-celular-mascara').mask('(00)00000-0000', {reverse: false});
	//mascara para valor monetario
	$(".js-mask-money").maskMoney({prefix: 'R$ ', allowNegative: false, allowZero: true, defaultZero: true, thousands: '.', decimal: ',' , affixesStay : true});

});
