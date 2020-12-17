
<html>
    <head>
        <title>Formulario</title>
        <meta charset="utf-8">

        <style>
            ul{
                list-style: none;
            }
            input, select{
                padding: 5px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <ul>
                <li>Usuario: <input type="text" name="txtUsuario"></li>
                <li>Senha: <input type="password" name="txtSenha"></li>
                <li><input type="submit" name="btnSubmit" value="Entrar"></li>
                    <a href="https://localhost/PHP/criptografia/index.php">Atualizar</a>

            </ul>
        
        </form>
        <?php
            echo "Usuario: ".filter_input(INPUT_POST,"txtUsuario",FILTER_SANITIZE_STRING)."<br>";
            echo "Senha: ".md5(filter_input(INPUT_POST,"txtSenha",FILTER_SANITIZE_STRING));
        ?>  
    </body>
</html>