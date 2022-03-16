<?php

session_start();

     session_destroy();
     clearstatcache ();
     header('Location: ../../index.php');
     exit();

?>