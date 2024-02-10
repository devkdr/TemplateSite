<?php 
 date_default_timezone_set('America/Sao_Paulo');
  session_start(); 
  if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
//header("location: index.php");
  }   
  
  if(!isset($_SESSION['id_cliente'])){  
		header("location: login.php");
		exit;
  } 
  

    ?>
   <!DOCTYPE html>
<html lang="en">
<head>
  <title>Exemplo de Carrinho / Curso Técnico em Informática</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  
  <script src="js/bootstrap.min.js"></script>
</head>
    <body>
    
          <div class="container">
    
       <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
       </div>
       <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" align="center">


      <div class="content" align="center">


    <div class="table-responsive" align="center">




     <?php
        if(count($_SESSION['carrinho']) == 0){
          echo ' Não há produto no carrinho.      ';
          } else {
					 	require_once("conexao_orientada.php");
						$total = 0;
					    $data = date("Y-m-d");
						$hora = date("H:i:s");
					    $chave = rand(0,1000000);			
					 
					  if (!empty($_POST["FORMA"])) 
						 $forma_pgto = $_POST["FORMA"];    
					   else
						 $forma_pgto = '';
                  // $id_cliente =  rand(1,3); //aqui é apenas um exemplo... aqui tem que ser passaso o id_cliente do login do cliente*/                   
				   $id_cliente = $_SESSION['id_cliente'] ;
                   $sql_vendas = "insert into vendas(data_emissao, hora, forma_pgto,chave,id_cliente) values ('$data','$hora', '$forma_pgto','$chave', $id_cliente);";				   			    
				   $result     = $conexao->query($sql_vendas);  
				   $idvenda    = $conexao -> insert_id;   
                 // INSERINDO OS ITENS DA VENDA 
                $total_qtd = 0;
                foreach($_SESSION['carrinho'] as $id => $qtd){

                        $sql   = "SELECT *  FROM produto WHERE idproduto= $id";
                        $qr    = $conexao->query($sql);
                        $ln    = $qr ->fetch_assoc();
                        $id_produto  = $ln['idproduto'];  
                        $preco_unitario = $ln['preco'];                      
                        $total_item   = $preco_unitario * $qtd;// TOTAL DO ITEM
                        $total_qtd   += $qtd;
                        //$total_qtd   = $total_qtd + $qtd;
                        $total       +=  $total_item;
//inserção
                        //422 - PAROU AQUI
						$sql = "insert into vendas_item (id_produto, quantidade,preco_unitario, id_venda, total_item) values (
						$id_produto, $qtd, $preco_unitario, $idvenda, $total_item)";
						
						$qr    = $conexao ->query($sql);
      
                }

$sql = "update vendas set total_nota = $total, numero_itens = $total_qtd where id_venda = $idvenda";

						$qr    = $conexao ->query($sql);
						unset($_SESSION['carrinho']);
						


echo "<h1> COMPRA REALIZADA COM SUCESSO!<br>COMPRA NÚMERO: $idvenda</h1><br>";
echo '<h1>Total da Compra: R$ '.number_format($total, 2, ',', '.').'</h1><br>';
echo "<a href=pedidos.php?idcliente=".$id_cliente."> MEUS PEDIDOS</a>";
               
              
          }
                   ?>
     


 </div>
 </div>
 </div>
   <div class="col-xs-1 col-sm-1 col-md-1">
       </div>
</body>
</html>