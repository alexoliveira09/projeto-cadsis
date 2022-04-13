<?php

include "info.php";

// echo HOST."<br>";
// echo USER."<br>";
// echo PASS."<br>";
// echo DBASE."<br>";



if(!isset($_SESSION["session_name"])){

echo 'Deslogado';
     session_destroy();
    header('Location: ../../');
    exit();
}

echo '<br>ok validado<br>';

?>