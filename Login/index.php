
<?php 
    session_start();
    require_once("Controller/UsuarioController.php");
    require_once("Model/Usuario.php");


    $usuarioController = new UsuarioController();//Instancia da controladora

    $msg="";

    if(filter_input(INPUT_GET,"msg",FILTER_SANITIZE_NUMBER_INT)){
        if(filter_input(INPUT_GET,"msg",FILTER_SANITIZE_NUMBER_INT)==1){
            $msg = "<div class='alert alert-warning'> Faça o login para acessar o painel!</div>";
        }else{
            $msg = "<div class='alert alert-info'> Voce fez Logout!</div>";
        }
    }

    //puxa os dados e manda para o controller que se comunica com a DAO para fazer o cadastro
    if(filter_input(INPUT_POST,"txtEmailRegistro",FILTER_SANITIZE_STRING)){ 
        $usuario = new Usuario(); //Instancia de usuario

        $usuario->setNome(filter_input(INPUT_POST,"txtNomeRegistro",FILTER_SANITIZE_STRING));
        $usuario->setEmail(filter_input(INPUT_POST,"txtEmailRegistro",FILTER_SANITIZE_STRING));
        $usuario->setSenha(md5(filter_input(INPUT_POST,"txtSenhaRegistro",FILTER_SANITIZE_STRING)));
        $usuario->setData(date("Y-m-d H:i:s"));

        $result = $usuarioController->Cadastrar($usuario);

        switch($result){
            case 1:
                $msg ="<div class='alet alert-success'>Usuario Cadastrado com sucesso!</div>";
                break;
            case -1:
                $msg ="<div class='alet alert-warning'>Usuario Ja esta Cadastrado!</div>";
                break;
            case -2:
                $msg ="<div class='alet alert-warning'>Dados invalidos!</div>";
                break;
            case -10:
                $msg ="<div class='alet alert-danger'>Houve um erro ao tentar cadastrar!</div>";
                break;
        }
    }

    //PARA FAZER O LOGIN
    //puxa os dados do email e autentica na função do controller
    //Cria uma session de login de usuario
    //redireciona para o painel do usuario
    if (filter_input(INPUT_POST,"txtEmailLogin",FILTER_SANITIZE_STRING)){
        $usuario = $usuarioController->Autenticar(filter_input(INPUT_POST,"txtEmailLogin", FILTER_SANITIZE_STRING), filter_input(INPUT_POST,"txtSenhaLogin",FILTER_SANITIZE_STRING));

        if($usuario != null){
            $_SESSION["nomeusuario"] = $usuario->getNome();
            $_SESSION["email"]=$usuario->getEmail();
            $_SESSION["data"]=$usuario->getData();

            header("Location: painel.php");
        }else{
            $msg="<div class='alert alert-warning'>Usuario ou senha invalidos!</div>";
        }
    }
?>

<!DOCTYPE html> <!--HTML -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewreport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- Login https://bootsnipp.com/snippets/featured/login-amp-signup-forms-in-panel -->
        <div class="container">
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><!--cabeça do painel-->
                        <div class="panel-title">Entrar</div>
                    </div>

                    <div style="padding-top:30px" class="panel-body"> <!--corpo do painel-->
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="frmEntrar" class="form-horizontal" role="form" method="POST"> <!-- inicio do formulario-->
                            <div style="margin-bottom: 25px;" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="txtEmailLogin" value="" placeholder="E-mail">
                            </div>

                            <div style="margin-bottom: 25px;" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="txtSenhaLogin" placeholder="Senha">
                            </div>

                            <div style="margin-bottom: 10px;" class="form-group">
                                <!--Button-->
                                <div class="col-sm-12 controls">
                                    <input type="submit" name="btnEntrar" value="Entrar" class="btn btn-success" />
                                    <!-- a = link com ajax que redireciona a pagina para o form de registrar-se-->
                                    <a href="#" onclick="$('#loginbox').hide();
                                        $('#singupbox').show()" class="btn btn-info">Registrar-se</a>
                                </div>
                            </div>

                            <br>
                            <div>
                                <?= $msg; ?>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!--Registrar-se-->
            <div id="singupbox" style="display: none; margin-top: 50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info"><!--cabeça do painel-->
                    <div class="panel-heading">
                        <div class="panel-title">Registrar-se</div>
                    </div>
                </div>

                <!--corpo do painel-->
                <div class="panel-body">
                    <form id="frmRegistrar" method="POST" class="form-horizontal" role="form">
                        <div class="form-group"><!--Email-->
                            <label for="txtEmailRegistro" class="col-md-3 control-label">E-mail</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtEmailRegistro" placeholder="Insira seu E-mail">
                            </div>
                        </div>

                        <div class="form-group"><!--Nome-->
                            <label for="txtNomeRegistro" class="col-md-3 control-label">Nome</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtNomeRegistro" placeholder="Nome Completo">
                            </div>
                        </div>

                        <div class="form-group"><!--Campo Senha-->
                            <label for="txtSenhaRegistro" class="col-md-3 control-label">Senha</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="txtSenhaRegistro" placeholder="***********">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-singup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Cadastrar</button>
                                <!-- a= botao que leva para o login principal utilizando ajax-->
                                <a id="singinlink" href="#" onclick="$('#singupbox').hide();
                                        $('#loginbox').show()" class="btn btn-default">Voltar</a>
                            </div>
                        </div>

                        <div style="border-top: 1px solid #999; padding-top: 20px;" class="form-group">
                        </div>

                    </form>
                </div>

            </div>
        </div>

    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>