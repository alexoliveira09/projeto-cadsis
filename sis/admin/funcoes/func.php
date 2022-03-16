<?php
/*
 * Função para logar
 */
//echo "FUNC";

function limpaCPF($cpf) {
   
 $cpf = str_replace('.', '', str_replace('-', '', str_replace('&', '', str_replace("'", '', str_replace("=", '', $cpf)))));
  
  return $cpf; 
}


function padraoMail($mail) {
   
$mail = htmlspecialchars(str_replace(' ', '', (trim(strtolower($mail)))));
  
  return $mail; 
}

function clearPass($pass) {
   
$pass = md5(str_replace(';', '', (str_replace('&', '', str_replace("'", '', str_replace("=", '', $pass))))));
  
  return $pass; 
}


?>