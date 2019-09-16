function buscarEndereco(cep){
    var url = 'http://api.postmon.com.br/v1/cep/' + cep.toString();
    $.getJSON(url, function(data){
        document.getElementById("inputEndereco").value= data.logradouro
        document.getElementById("inputCidade").value= data.cidade
        document.getElementById("inputBairro").value= data.bairro
        document.getElementById("inputEstado").value= data.cidade_info.estado
    }
    )
}