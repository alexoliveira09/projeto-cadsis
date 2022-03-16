<?php
session_start();

include "info.php";

echo HOST."<br>";
echo USER."<br>";
echo PASS."<br>";
echo DBASE."<br>";

// $conn = new PDO("mysql:Database=".DBASE."; host=".HOST, USER, PASS);

// exit();

// $stmt = $conn->prepare("SELECT * FROM TABLE_USER (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

// $login = "jose";
// $password = "1234567890";

// $stmt->bindParam(":LOGIN", $login);
// $stmt->bindParam(":PASSWORD", $password);


// $stmt->execute();

// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($results);



// if(!isset($_SESSION["session_name"])){
//      //echo 'Deslogado';
//      session_destroy();
//      header('Location: index.php');
//      exit();
// }

//echo '<br>ok validado<br>';

?>