<?php
if(!isset($_POST['nome']))
{
    header("location: cadastroprod.php");
}
?>
<style type="text/css">
body {
	background: url("assets/img/wallpaper.png") top fixed repeat ;
}

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Selecao</title>
  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<br/>

</style>

<?php

    include_once('conexao.php');
    $uploaddir = 'img/';
    $nome = $_POST['nome'];
    $valor     =   str_replace(",",".",$_POST['valor']);
    $image = $_FILES['arquivo']['name'];     
    //$uploadfile = img/cachorro.jpg
    $uploadfile = $uploaddir . $_FILES['arquivo']['name'];	 
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile))
    {	  
     $sql = "insert into produto(nome, valor, imagem) values     					                 ('$nome',$valor,'$image')";
        if ($conexao->query($sql))		
            echo "<h2><center><strong>Arquivo Enviado".'<br></center></h2> </strong>'.$_FILES['arquivo']['name'];	
       else
           echo "<p><h2><center><strong>Houve um problema no upload do arquivo no SGBD'.<p><br></center>".$conexao ->error; 		 
    }
    else 	
           echo "<p><h2><center><strong>Houve um problema no upload do arquivo</center></strong><br><br></p>"; 

?>
</style>