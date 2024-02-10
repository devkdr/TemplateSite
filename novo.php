<!DOCTYPE html>
<html lang="en">
<head>
  <title>Criar Registro</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


		<body>
		<div class="container">
		<p>
		
		    <div class="panel panel-primary">
      <div class="panel-heading">Digite seus dados</div>
      <div class="panel-body">	  
	  
		<form action="#" method="post">
		
		<div class="row">
		<div class="col-sm-10">
		  <div class="form-group">
			<label for="email">Primeiro Nome:</label>
			<input type="text" class="form-control" name="primeiro">
			<br>
			<label for="email">Ultimo Nome:</label>
			<input type="text" class="form-control" name="ultimo">
			<br>
			<label for="email">Email:</label>
			<input type="text" class="form-control" name="email">
			<Br> <br>
			<div class="row">
			<div class="col-sm-4">
			<div class="form-group">
 		
   			
  		</select>
  
</div></div></div>
		  </div>
		  </div>
		  <div class="col-sm-2">
		  <br />
		  
		  
		   <button type="submit" class="btn btn-primary btn-block btn-lg btn-center" >Enviar</button></
		  
		  
		  </div>
		  </div>
		  
		  
		</form>	
		
	 
	  </div>
    </div>
	</div>
	
		

	
	

<?php

include_once('conexao.php');
if($_POST)
{
 $primeironome = $_POST['primeiro'];
 $ultimonome = $_POST['ultimo'];
 $email = $_POST['email'];

 
} 
else
{
 $primeironome = '';
 $ultimonome = '';
 $email = '';

 }
 
 
 
$sql ="insert into cliente (primeiro_nome,ultimo_nome,email) VALUES ('$primeironome', '$ultimonome', '$email')";
$result = $conexao  ->query($sql);

		$i = 0;
	

  
?>
</table>
</body>
</div>
</html>

