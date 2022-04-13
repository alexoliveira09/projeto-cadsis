<?php
require "admin/validate.php";
	
   echo  $_SESSION["session_name"]??NULL;
   echo "<br>";
   echo  $_SESSION["session_mail"]??NULL;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=NAME;?></title>
</head>
<body>
<a href="admin/logout.php">Logout</a>
</body>
</html>