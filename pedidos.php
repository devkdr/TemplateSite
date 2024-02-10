<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exemplo de Carrinho / Curso Técnico em Informática</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container center-block"> 
     

     <?php
	     include_once("conexao_orientada.php");
		 $sql = 'SELECT * FROM cliente where cliente_id='.$_GET['idcliente'];
		 $result = $conexao ->query($sql);
		 $linha  = $result ->fetch_assoc();
		 $codigo = $linha['cliente_id'];
		 $nome   = $linha['primeiro_nome'];	 
     ?>
     <p><br>
     <h2><center>Cliente: <?php echo $codigo.' - '.$nome; ?></center> </h2>
     <p><br>
    
     <?php
	   
	     $sql = 'SELECT * FROM vendas where id_cliente='.$_GET['idcliente'];
		 $result = $conexao ->query($sql);
		 while ($linha  = $result ->fetch_assoc())
		 {
		 echo '<h3>'.$linha['idvendas'].' - '.$linha['total_nota'].'<p>';	
		 $sql_item = "SELECT
					  v.id_venda, preco, imagem, nome, total_item, quantidade, preco_unitario
				FROM
					  vendas_item v,
					  produto p
				where
					  v.id_produto = p.idproduto and
					  v.id_venda = ".$linha['idvendas']."
				
				order by id_venda";
				
				
				
				$result_item = $conexao ->query($sql_item);
				 while ($linha_item  = $result_item ->fetch_assoc())
				 {
					 echo '<img src="img/'.$linha_item['imagem'].'" width="100px" height="100px">'.
					      'Nome: '.$linha_item['nome'].' - '.
					      'Preço: '.$linha_item['preco_unitario'].' - '.
					      'Quantidade: '.$linha_item['quantidade'].' - '.
					      'Total: '.$linha_item['total_item'].'<br>';
				 }
		          echo '---------------------------------------------';
		 	
		 }
	 
	 
	 
	 
	 
	 
	 
	 ?>
	
</div>

</body>
</html>