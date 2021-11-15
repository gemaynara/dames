$(".cep").mask("99999-999");
$(".cpf").mask("999.999.999-99");
$(".cnpj").mask("99.999.999/0001-99");
$(".numero").mask("99999");
$(".telefone").mask("(99) #999-9999");
$(".celular").mask("(99) 99999-9999");

$("#cep-comercial").on('blur', function (e){
    e.preventDefault();
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {
            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    $(".cep-comercial").html("")
                    //Atualiza os campos com os valores da consulta.
                    $("#comercial-end").val(dados.logradouro);
                    $("#comercial-bairro").val(dados.bairro);
                    $("#comercial-cidade").val(dados.localidade);
                    $("#comercial-uf").val(dados.uf);
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    $("#comercial-end").val("");
                    $("#comercial-bairro").val("");
                    $("#comercial-cidade").val("");
                    $("#comercial-uf").val("");
                    $(".cep-comercial").html("CEP inválido")
                }
            });
        } //end if.
        else {
            //cep é inválido.
            $("#comercial-end").val("");
            $("#comercial-bairro").val("");
            $("#comercial-cidade").val("");
            $("#comercial-uf").val("");
           $(".cep-comercial").html("CEP inválido")
        }
    } //end if.
})

$("#cep-residencial").on('blur', function (e){
    e.preventDefault();
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {
            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    $(".cep-residencial").html("")
                    //Atualiza os campos com os valores da consulta.
                    $("#residencial-end").val(dados.logradouro);
                    $("#residencial-bairro").val(dados.bairro);
                    $("#residencial-cidade").val(dados.localidade);
                    $("#residencial-uf").val(dados.uf);
                } //end if.
                else {
                    $("#residencial-end").val("");
                    $("#residencial-bairro").val("");
                    $("#residencial-cidade").val("");
                    $("#residencial-uf").val("");
                    $(".cep-residencial").html("CEP inválido")
                }
            });
        } //end if.
        else {
            //cep é inválido.
            $("#residencial-end").val("");
            $("#residencial-bairro").val("");
            $("#residencial-cidade").val("");
            $("#residencial-uf").val("");
            $(".cep-residencial").html("CEP inválido")
        }
    } //end if.
})
