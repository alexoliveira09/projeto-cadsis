<?php


function limpaCPF($cpf)
{

   $cpf = str_replace('.', '', str_replace('-', '', str_replace('&', '', str_replace("'", '', str_replace("=", '', $cpf)))));

   return $cpf;
}


function padraoMail($mail)
{

   $mail = htmlspecialchars(str_replace(' ', '', (trim(strtolower($mail)))));

   return $mail;
}

function clearPass($pass)
{

   $pass = md5(str_replace(';', '', (str_replace('&', '', str_replace("'", '', str_replace("=", '', $pass))))));

   return $pass;
}

// function create($tabela, array $datas) {
//    $fields = implode(", ", array_keys($datas));
//    $values = "'" . implode("', '", array_values($datas)) . "'";
//    $qrCreate = "INSERT INTO {$tabela} ($fields) VALUES ($values)";
//    $stCreate = mysql_query($qrCreate) or die("Erro ao cadastrar tabela " . $tabela);

//    if ($stCreate) {
//       return true;
//    }
// }

function select($login, $password)
{
   $conn = new PDO("mysql:dbname=" . DBASE . "; host=" . HOST, USER, PASS);
   $stmt = $conn->prepare("SELECT * FROM " . TABLE_USER . " WHERE senha = :PASSWORD AND email = :LOGIN ");

   $stmt->bindParam(":LOGIN", $login);
   $stmt->bindParam(":PASSWORD", $password);

   $stmt->execute();
   $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

   if ($data) {
      return true;
   }
}
