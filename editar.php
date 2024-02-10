<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Untitled Document</title>
</head>

<body>

<div class="container">
<?php
include_once('conexao.php');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = 'select * from cliente where cliente_id='.$id;
	$result = $conexao ->query($sql);
	$row =    $result ->fetch_assoc();
	$primeiro = $row['primeiro_nome'];
	$ultimo = $row['ultimo_nome'];
	$email = $row['email'];
}
else
    header("location: selecao.php");
?>
  <h2> <center>Edição de Cliente</center></h2>
  <form action="#" method="post">
    <div class="form-group">
      <label for="primeiro">Primeiro Nome:</label>
      <input type="text" class="form-control" placeholder="Informe o Primeiro Nome" name="primeiro" required="required" value="<?php echo $primeiro; ?>">
    </div>
    
       <div class="form-group">
      <label for="ultimo">Ultimo:</label>
      <input type="text" class="form-control"  placeholder="Informe o Ultimo Nome" name="ultimo" required="required">
    </div>
    
       <div class="form-group">
      <label for="ultimo">Email:</label>
      <input type="email" class="form-control" placeholder="Informe o email" name="email" required="required">
    </div>
    
   
    <button type="submit" class="btn btn-primary btn-block">Salvar Cadastro</button>
  </form><p></p><br />
  <?php
  
  
  if($_POST)
  {
	  $primeiro = $_POST['primeiro'];
	  $ultimo   = $_POST['ultimo'];
	  $email    = $_POST['email'];
	  
	  $sql = "insert into cliente(primeiro_nome, ultimo_nome, email)
	                 values ('$primeiro','$ultimo','$email');";
	
	  if ($result = $conexao ->query($sql))
	  {
		 echo ' <div class="alert alert-success">
				  <strong>Successo!</strong> Registro Salvo com Sucesso
				</div>';
		  header("refresh: 3; selecao.php");
		//header("location: selecao.php");
	  }
	  else
	  {
		 echo ' <div class="alert alert-danger">
				  <strong>Erro!</strong> Erro ao Salvar Registro.<br>'.$conexao->error.'
				</div>'; 
	  }
					 	  
  }
    $conexao ->close();
  ?>
</div>


</body>
</html>