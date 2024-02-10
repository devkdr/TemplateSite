<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastre o Produto</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


		<body>
		
		<p>
		
		    
      <div class="panel-heading">Cadestre o Produto</div>
      <div class="panel-body">	  
	  
		<form action="upload.php" enctype="multipart/form-data" method="POST">
		  <div class="form-group">
			<label for="email">Selecione o Arquivo</label>
			<input type="file" class="form-control" name="arquivo" accept="image/*">
			<br>
            
        </div>
           <div class="form-group">
			<label for="descricao">Nome:</label>
			<input type="text" class="form-control" name="nome">
			<br>

            
</div>
            <div class="form-group">
			<label for="descricao">Valor:</label>
			<input type="text" class="form-control" name="valor" onkeypress="return
            {event.chardCode >= 48 && event.charCode <= 57) I I event.charCode == 13 I I event.charCode == 44"
            required >
            </div>
			<button type="submit" class="btn btn-primary"> Cadastrar Produto </button>
            </form>
<?php
include_once('conexao.php');