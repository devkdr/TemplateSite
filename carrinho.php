<?php
  date_default_timezone_set('America/Sao_Paulo'); 
  session_start(); 
  if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  } 
  
  if(isset($_GET['acao'])){ 
  
    //ADICIONAR CARRINHO 
    if($_GET['acao'] == 'add'){ 
      $id = $_GET['id']; 
      if(!isset($_SESSION['carrinho'][$id]))
        $_SESSION['carrinho'][$id] = 1; 
      else  
        $_SESSION['carrinho'][$id] += 1; 
      } 
	  
	
	  
	
	//REMOVER DO CARRINHO 
    if($_GET['acao'] == 'del'){ 
      $id = $_GET['id']; 
      if(isset($_SESSION['carrinho'][$id])){ 
        unset($_SESSION['carrinho'][$id]); 
      } 
    } 
	
	//ALTERAR QUANTIDADE 
    if($_GET['acao'] == 'up'){ 
      if(is_array($_POST['prod'])){ 
        foreach($_POST['prod'] as $id => $qtd){
            //$id  = $id;
            //$qtd = $qtd;
            if(!empty($qtd) || $qtd <> 0)
              $_SESSION['carrinho'][$id] = $qtd;
            else
              unset($_SESSION['carrinho'][$id]);    
        }
      }
    }
          
   }
          
          
    ?>
   <!DOCTYPE html>
   <!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Produtos | MyGames</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/fa/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logok.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logok.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

                <header id="masthead" class="site-header site-header-white">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <a href="index.html" class="site-title"><span>My</span>Games</a>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li><a href="portfolio.php">Produtos</a></li>
                              <li><a href="blog.html">Sobre</a></li>
                            </ul>

                        </li>
                        <li class="active"><a href="portfolio.php">Produtos</a></li>
                        <li><a href="blog.html">Sobre</a></li>
                        <li><a href="contact.php">Contato</a></li>
                        <li><a href="ui-elements.html"></a></li>
                        
                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay subpage-hero portfolio-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Produtos</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Produtos</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">
        
<html lang="en">
<head>
  <title>Meu Carrinho</title>
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


  <table class="table center-block" align="center">
    <caption>Carrinho de Compras</caption>
    <thead>
      <tr>
        <th >Imagem</th>
        <th >Produto</th>
        <th >Quantidade</th>
        <th >Preço</th>
        <th >SubTotal</th>
        <th >Remover</th>
      </tr>
    </thead>
     <form action="?acao=up" method="post">
    <tfoot>   
      <tr>
        <td colspan="6"><input type="submit" value="Atualizar Carrinho" /></td>
     
      <td colspan="6"><a href="index.php">Continuar Comprando</a></td>
       </tr>       
    </tfoot>
    <tbody>
     <?php
        if(count($_SESSION['carrinho']) == 0){
          echo '
        <tr>
          <td colspan="5">Não há produto no carrinho</td>
        </tr>';
          } else {
                require("conexao.php");
                $total = 0;
                foreach($_SESSION['carrinho'] as $id => $qtd){
                        $sql   = "SELECT *  FROM produto WHERE idproduto= '$id'";
                        $qr    = $conexao-> query($sql);
                        $ln = $qr->fetch_assoc();
                        $nome  = $ln['nome'];
                        $preco = number_format($ln['valor'], 2, ',', '.');
                        $sub   = number_format($ln['valor'] * $qtd, 2, ',', '.');
                        $total += ($ln['valor'] * $qtd);
                         echo '
              <tr>';  
			         echo '<td><img src="img/'.$ln['imagem'].'"  class="img-responsive  center-block" ></td>';    
              echo'  <td>'.$nome.'</td>
                <td><input type="number" min="1" name="prod['.$id.']" value="'.$qtd.'" /></td>
                <td>R$ '.$preco.'</td>
                <td>R$ '.$sub.'</td>
                <td><a href="?acao=del&id='.$id.'">Remove</a></td>
                 </tr>';
                }
                $total = number_format($total, 2, ',', '.');
                echo '<tr>                         
              <td colspan="5"><b>Total</b></td>
              <td><b>R$ '.$total.'</b></td>
                    </tr>';
          }
                   ?>
       
         </tbody>
    </form>  
 </table>


 </div>
 </div>
 </div>
</div>


 <div class="container">
    
       <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
       </div>
       <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" align="center">

      <div class="content" align="center">

    <div class="table-responsive" align="center">


  <table class="table center-block" align="center">   
     <tr>
        <th > Finalizar Compra</th>
        <th ><form action="finalizar.php" method="post" name="pgto">
        <select name="FORMA">
  <option value="BOLETO">BOLETO</option>
  <option value="CARTÃO">CARTÃO</option>
  <option value="DEPOSITO">DEPOSITO</option>
      </select>
</th>
        <th ></th>
        <th ></th>
        <th ></th>      
      </tr>
        <tr>    
        <th ><input type="submit" value="FINALIZAR VENDA"></th>
            <th ></th>
        <th ></th>
        <th ></th>
        <th ></th>
      
      </tr>       
   </table>
   </form>
   </div>
   </div>
   </div>
   </body>
</html>