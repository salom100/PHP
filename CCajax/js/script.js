$(document).ready(function(){
    $("#btnCadastrar").click(function(){ // Cadastrar o usuario

        //objeto com as informalçoes do formulario.
        var obj ={
            txtNome: $("#txtNome").val(),
            txtEmail: $("#txtEmail").val(),
            txtTelefone: $("#txtTelefone").val()
        };

        console.log(obj);
        //ResultadoCadastro
        $.ajax({
            url: "action/UsuarioAction.php?req=1",
            type: "POST",
            dataType: "TEXT",
            //contentType: "application/json",
            data:obj,

            //antes de enviar ele retorna uma mensagem de processando
            beforeSend: function(){
                $("#ResultadoCadastro").html("Processando...");
            },

            //no caso de sucesso ele pega os dados de data que recebeu os dados do objeto com os valores
            success: function(data){
                console.log(data);

                if(data == 1){
                    $("#ResultadoCadastro").css("color","green");
                    $("#ResultadoCadastro").html("Cadastrado.");
                }else{
                    $("#ResultadoCadastro").css("color","red");
                    $("#ResultadoCadastro").html("Houve um erro ao tentar cadastrar o usuario");
                }
            },
            error: function(error){
                console.log(error);
            },
            complete: function(){

            }
        });
    });

    $("#btnConsultar").click(function(){
        $.ajax({
            url: "action/UsuarioAction.php?req=2",
            type: "GET",
            dataType:"TEXT",
            data:{},
            success: function(data){
                console.log(data);
                $("#ResultadoConsulta").html(data);

                //ENFEITE
                //separa o texto 
                var dt= data.split("|");
                //exibir os dados no campo 
                $("#txtNome").val(dt[0].split(":")[1]);
                $("#txtEmail").val(dt[1].split(":")[1]);
                $("#txtTelefone").val(dt[2].split(":")[1]);
                //FIM DO ENFEITE
            },
            error: function(error){
                console.log(error);
            }
        });
    });


    //PREENCHER OS CAMPOS SEGUINTES DEPOIS DO PRIMEIRO
    $("#txtCep").focusout(function(){ // assim que sair do campo txtCep ele executa
        //Se o campo for preenchido
        if($("#txtCep").val().length >= 5){ 
            //da um replace para tirar o - do numero de cep
            var cep = $("#txtCep").val().replace("-","");

            //Busca no site de ceps o cep requisitado
            var url = "https://viacep.com.br/ws/"+cep+"/json/";
            console.log(url);
            $.ajax({
                url:url,
                type: "GET",
                //JSONP utilizado ao inves de apenas JSON,
                // pois nao esta em um servidor e sim numa maquina local
                dataType: "JSON",
                data:{},
                success: function(data){
                    console.log(data);
                    //verifica se existe dados
                    if(data != null){ // se existir os dados
                        $("#txtLogradouro").val(data.logradouro);
                        $("#txtComplemento").val(data.complemento);
                        $("#txtBairro").val(data.bairro);
                        $("#txtLocalidade").val(data.localidade);
                        $("#txtUF").val(data.uf);
                        $("#txtIBGE").val(data.ibge);
                        $("#txtGIA").val(data.gia);
                        $("#txtDDD").val(data.ddd);
                        $("#txtSiafi").val(data.siafi);
                    }
                },
                error: function(error){
                    console.log(error);
                }
            });

        }
    });

    //Faz a chamada para cadastrar os CEPs
    $("#btnCadastrarEndereco").click(function(){

        var obj={ // objeto que ter os dados do cep
            txtCep: $("#txtCep").val(),
            txtLogradouro: $("#txtLogradouro").val(),
            txtComplemento: $("#txtComplemento").val(),
            txtBairro: $("#txtBairro").val(),
            txtLocalidade: $("#txtLocalidade").val(),
            txtUF: $("#txtUF").val(),
            txtIBGE: $("#txtIBGE").val(),
            txtGIA: $("#txtGIA").val(),
            txtDDD: $("#txtDDD").val(),
            txtSiafi: $("#txtSiafi").val(),
        };

        console.log(obj); // exibe no console do navegador o objeto

        $.ajax({
            url: "action/UsuarioAction.php?req=3",//requisição que vai para cadastrar o CEP
            type: "POST", // tipo do requerimento
            dataType: "TEXT", //tipos de dados
            data:obj, // data que recebera o obj

            beforeSend: function(){ // mensagem de processamento 
                $("#ResultadoCad").html("Processando...");
            },

            success: function(data){ // se foi possivel cadastrar
                console.log(data);

                if(data==1){
                    $("#ResultadoCad").css("color","green");
                    $("#ResultadoCad").html("Endereço Cadastrado.");
                }else{
                    $("#ResultadoCad").css("color","red");
                    $("#ResultadoCad").html("Houve um erro ao tentar cadastrar o CEP")
                }
            },

            error: function(error){ // os erros que houverem ele joga no console do navegar para serem examinados
                console.log(error);
            },
            complete: function(){

            }

        });

    });    

});