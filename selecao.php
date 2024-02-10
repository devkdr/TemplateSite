<!DOCTYPE html>
<html lang="en">
<head>
  <title>Selecao</title>
  
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  			<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
			<body>
		<div class="container">
		<p>
		
		    <div class="panel panel-primary">
      			<div class="panel-heading w3-xxlarge w3-xlarge font-effect-shadow-multiple">Pesquise</div>
      				<div class="panel-body">	  
	  
		<form action="#" method="post">
		
			<div class="row">
				<div class="col-sm-8">
		  			<div class="form-group">
					<label for="email">Nome:</label>
					<input type="text" class="form-control" name="nome">
			<br>
			
			
			
			<div class="row">
			<div class="form-group">
			<div class="col-sm-0">
 	
   			
  		</select>
  
</div></div></div>
		  </div>
		  </div>
		  <div class="col-sm-2">
		  <br />
		  
		  
		   	<button type="submit" class="btn btn-primary btn-block btn-lg btn-center" ><i class="glyphicon glyphicon-search"></i> Pesquisar</button>
		  
		  
		  </div>
		  </div>
		  
		  
		</form>	
		
	 
	  </div>
    </div>
	</div>
	
	<style>
		body {
  font-family: Arial;
  </style>	
		

	
	
	<table class="w3-table-all w3-centered w3-hover-color w3-xlarge">
 <thead>
	
<th>Nome </th> 
	<th> Valor</th>
	<th> Imagem </th>
	<th><a href='cadastroprod.php?id='$row['cliente_id']><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-file" aria-hidden="true"></i> Novo</button></i></th></a></button></p>
	</tr>
	</thead>
<?php

include_once('conexao.php');
if($_POST)
{
 $nome = $_POST['nome'];


 
} 
else
{
 $nome = '';
 }
 


 
$sql ="select * from produto where nome like '%$nome%' ";
$result = $conexao  ->query($sql);

		$i = 0;
	while ($row = $result->fetch_assoc() )
{	
	 echo '<tr class="info">
	 <tr class="w3-hover-black w3-centered w3-large">
		  <td align="">'.$row['nome']. '</td>
		  <td align="">'.$row['valor']. '</td>
		   
		  <td align=""><img src="img/'.$row['imagem'].'" style="width:120px"</td></img> 
		  <td><a href=alterar.php?id='.$row['idproduto'].' <b><br><br> <button type="button"  button class="w3-button w3-blue-grey w3-round w3-block	 style="width:13.3%"><i class="fa fa-pencil" style="font-size:20px;"></i>  Alterar</button> </td></b>
		  
		  
      </tr></ul>';
}
echo'.<center>Pesquisas feitas:'.$result->num_rows;
 
?>
</table>
</body>
</div>
</html>

