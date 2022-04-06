<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>

<body>

    <div id="img-user"><img src="img/user.png" alt=""></div>
    <div id="bloco-star pt-4 mt-4">

    </div>
    <div id="bloco-login">

        <form id="bloco-form" action="sis/admin/login.php" method="POST">
            <label>E-mail</label>
            <input type="text" name="mail" placeholder="Digite seu e-mail:" required>
            <label>Senha</label>

            <div class="col-10">

                <input class="col-4" type="password" name="password" id="senha" placeholder="Digite sua senha:" required>
                <button type="button" onclick="mostrarSenha()" class="col-4">
                    <i class="fa fa-envelope-o"></i></button>
            </div>

            
            <input class="btn" type="submit" name="btn" value="Logar">

            <div class=" pt-4 pb-4 mt-4 mb-4 align-center" style="color:red; background-color: #fff; text-align: center; font-size: 1.2em;">
                <?php
                session_start();

                echo $_SESSION["session_error"] ?? NULL;

                session_destroy();
                clearstatcache();
                ?>

            </div>

            <label class="txt-pass"><a href="sis/recover/recover.php">Esqueceu a senha?</a></label>


        </form>

        <script>
            function mostrarSenha() {
                var tipo = document.getElementById("senha");
                if (tipo.type == "password") {
                    tipo.type = "text";
                } else {
                    tipo.type = "password";
                }
            }
        </script>

    </div>

</body>

</html>