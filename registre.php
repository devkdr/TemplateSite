<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  	<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
  	<title>Registre-se</title>
</head>
<body>
<link rel="stylesheet" href="assets/css/registre.css">
  <div class="Login">
      <div class="section">
        <div class="login bg-white m-8">
          <h1 class="text-center">
            <svg class="img" xmlns="http://www.w3.org/2000/svg" width="26" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
          </h1>
          
    <form action="#" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email">
    </div>
    <div class="form-group">
    <label for="name">Nome:</label>
      <input type="name" class="form-control" id="name" placeholder="" name="nome">

</div>
    <div class="form-group">
      <label for="password">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="" name="senha">
    </div>
    <div class="form-group">
      <label for="nmb">CPF:</label>
      <input type="number" class="form-control" id="cpf" placeholder="" name="cpf">
</div>
<div class="form-group">
      <label for="end">Endereço:</label>
      <input type="text" class="form-control" id="endereco" placeholder="" name="endereco">

<Br>
<center><button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>


  



<?php
if($_POST)
{
  
include_once('conexao.php');
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 $cpf = $_POST['cpf'];
 $endereco = $_POST['endereco'];

 $sql ="insert into contas (nome, email, senha, cpf, endereco) values ('$nome', '$email', '$senha', '$cpf', '$endereco')";
 header("refresh: 3; index.php");
if  ($conexao  ->query($sql))
echo '.<br><Br><center>Registro salvo';
else
echo $conexao-> error;

}



?>




</form>
        </div>
      </div>
    </div>
    </body>
</html>





