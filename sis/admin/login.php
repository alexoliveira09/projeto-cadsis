<?php

require "info.php";
require "funcoes/func.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$login = padraoMail($_POST["mail"]);
$password = clearPass($_POST["password"]);

// echo $login;
// echo "<br>";
// echo $password;
// echo "<br>";

$stmt = select($login, $password);


/* Return number of rows that were deleted */
//print("Return number of rows that were deleted:\n");
//$count = $stmt->rowCount();
//print("$count rows.\n");



/* verifica se teve acesso e se retornou 0 ou 1*/
if($count <= 0 AND !$data){
//echo $count." Result 0";
$_SESSION["session_error"] = "Login or Password incorrect!";

header("Location: ../../");
exit();

}

foreach ($data as $row) {
	
   $_SESSION["session_name"] = $row['nome'];
   $_SESSION["session_mail"] = $row['email'];
}


header("Location: ../");
exit();

}else{

header("Location: ".LOCAL."/".PASTA."/");
exit();

}

// echo "Nome: ".$_SESSION["session_name"] .'</br>';



