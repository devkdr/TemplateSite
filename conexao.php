<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "25dejulho.info";
$username = "joaopedro";
$password = "aula2022*";
$schema = "joaopedro";

// Criar conexão

$conexao = new mysqli ($servername, $username, $password, $schema);

// Check connection

if ($conexao->connect_error) {
   die("Falha de Conexão: " . $conexao->connect_error);
   }
   
   //echo "Conexão efetuada com sucesso :)";
   ?>

</body>
</html>
