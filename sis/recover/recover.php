<?php
require "../admin/info.php";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= NAME; ?></title>
</head>

<body>
<div class="mb-3">
  <form action="check_email.php" method="post">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" name="mail" id="exampleFormControlInput1" placeholder="name@example.com" required>
  <button type="submit" onclick="mostrarSenha()" class="col-4">Verificar</button>
  <div class=" pt-4 pb-4 mt-4 mb-4 align-center" style="color:red; background-color: #fff; text-align: center; font-size: 1.2em;">
                <?php
                echo $_SESSION["session_error"] ?? NULL;

                session_destroy();
                clearstatcache();
                ?>

            </div>

</div>

</body>

</html>