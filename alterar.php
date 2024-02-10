<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<!-- 
    ================================================== -->
<body>
<div class="container">
<?php
include_once('conexao.php');
 $id= $_GET['id'];
 $sql = "SELECT nome,valor,imagem FROM produto WHERE idproduto=$id";
 $result = $conexao -> query($sql);
 $row = $result->fetch_assoc();
 $nome = $row['nome'];
 $valor = $row['valor'];
 $imagem = $row['imagem'];


 

?>
<div class="panel panel-primary">
      <div class="panel-heading">Criar cadastro</div>
      <div class="panel-body">

      <br>
  <form action="#" method="post">
   
  <div class="row">
    <div class="col-sm-10">
      <div class="form-group"> 
   
      <input type="text" class="form-control" placeholder="nome" name="nome" value="<?php echo $nome;?>">
      <br>
      <input type="text" class="form-control" placeholder="valor" name="valor" value="<?php echo $valor;?>">
      <br>
      <label for="email">Selecione a imagem</label>
			<input type="file" class="form-control" placeholder="imagem" name="imagem" accept="image/*">
   </div> 
    
    <div class="col-sm-2">
  <button type="submit" class="btn btn-primary btn-block">alterar</button>
  
  </select>
</div>
<br/>
</div>
</div>
    </form>

      </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
<div class="panel panel-primary">
      
      <div class="panel-heading" align="center"><a href="selecao.php"><button type="button" class="btn btn-info">voltar</button></a></div>

      

      </div>
    </div>




<!-- PHP
    ================================================== -->
    
<?php


if ($_POST){
  $nomeproduto = $_POST['nome'];
 $valor = $_POST['valor'];
 $imagem = $_POST['imagem'];

 
 $sql = "update produto set   valor='$valor' , nome='$nome' , imagem='$imagem'  where idproduto=$id";
$result = $conexao -> query($sql);
echo $sql;
}

?>
</table>
</div>
</body>
</html>