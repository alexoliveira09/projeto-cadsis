<?php

require "../admin/info.php";
require "../admin/funcoes/func.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $mail = padraoMail($_POST["mail"]);

echo $mail;

  $conn = new PDO("mysql:dbname=" . DBASE . "; host=" . HOST, USER, PASS);

  $stmt = $conn->prepare("SELECT email FROM " . TABLE_USER . " WHERE email = :MAIL ");

  $stmt->bindParam(":MAIL", $mail);

  $stmt->execute();

  $count = $stmt->rowCount();

  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      /* verifica se teve acesso e se retornou 0 ou 1*/
      if ($count <= 0 and !$data) {
        //echo $count." Result 0";
        $_SESSION["session_error"] = "Email não encontrado!";
        header("Location: recover.php");
        echo $_SESSION["session_error"] ?? NULL;
        exit();
      }


  $stmt = $conn->prepare("UPDATE " . TABLE_USER . " SET `access_token` = '3245asdasd' WHERE email = :MAIL ");

  $stmt->bindParam(":MAIL", $mail);

  $stmt->execute();
  $_SESSION["session_error"] = "Acesso enviado para o email informado!";
  header("Location: recover.php");
  exit();
  
} else {

  header("Location: ../../");
  exit();
}
echo $_SESSION["session_error"] ?? NULL;
// echo "Nome: ".$_SESSION["session_name"] .'</br>';
