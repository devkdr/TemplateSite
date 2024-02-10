
<?php
    session_start();
    
?>



<!DOCTYPE html>
<html lang="    ">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  	<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
  	<title>Login  </title>
</head>
<body>
<link rel="stylesheet" href="assets/css/login.css">
  <div        lass="Login">
      <div class="section">
        <div class="login bg-white m-4">
          <h1 class="text-center">
            <svg class="img" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
          </h1>
          

          <form action="#" method="post">
            <div class="form-group">
              <label class="form-label" type="name">
                Nome 
              </label>
              <input class="form-control" type="name" id="nome" required name="nome" />
             
            </div>

            <div class="form-group">
              <label class="form-label" type="password">
                Senha
              </label>
              <input
                name="senha"
                class="form-control"
                type="password"
                id="senha"
                required
              />
              <span class="lnr lnr-eye"></span>
            </div>

            <div class="form-group form-check">
              <input class="form-check-input" type="checkbox" id="checkbox" />
              <label class="form-check-label" type="checkbox">
              Lembrar de mim
              </label>
            </div>
            <div class="form-group form-check">
            <STYLE>A {text-decoration: none;} </STYLE>
            <a href="registre.php">Registre-se</a>
</label>
</div>
            <input
              class="btn btn-primary w-100"
              type="submit"
              value="Entrar "
            /> </form>


            <?php
  include_once("conexao.php");
  if($_POST)
  { 
     $nome = $_POST['nome'];
	 $senha = $_POST['senha'];
	 
	 $sql = "select * from contas where nome='$nome' and senha='$senha'";
	 $result = $conexao->query($sql);
	 if ($result)
	 {
		if ($result->num_rows >0)
		{
			$row = $result->fetch_assoc();
			$_SESSION['nome'] = $row['nome'];
		echo '<div class="alert alert-success">
  <strong>Successo de Autenticação!</strong> Usuário Válido - '.$row['nome'].'</div>';
            header("refresh: 3; index.php");
		}
		else
		echo '<div class="alert alert-danger">
  <strong>Erro de Autenticação!</strong> Usuário e/ou Senha Inválido</div>';
	 }
	  
  }
  
  ?>
</div>

</body>
</html>