<?php
/**
 * Sistema de Cadastrmento de clientes
 * Desenvolvido por Alex Oliveira e Priscila Mangueira
 * Todos os direitos preservados
 * Ano de Inicio do projeto Março de 2022
 * */

session_start();

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DBASE", "php_com_pdo");
define("TABLE_USER", 'tb_usuarios');

// echo "<br>ok pg info<br>";

// echo HOST."<br>";
// echo USER."<br>";
// echo PASS."<br>";
// echo DBASE."<br>";
// echo TABLE_USER."<br>";

define("NAME", "CADSIS");
define("PROGRAMA_VERSAO", "1.0");
define("LOCAL", "localhost");
define("PASTA", "projeto-cadsis");
//echo PROGRAMA_VERSAO;

//echo LOCAL."/".PASTA."/";


?>