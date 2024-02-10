<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>   

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
                <header id="masthead" class="site-header site-header-white">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <a href="index.html" class="site-title"><span>My</span>Games</a>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="index.php ">Home</a></li>
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
        

                <section class="site-section subpage-site-section section-portfolio">
                    <div class="container">
                        
                        <ul class="portfolio-sorting list-inline text-center">
                            <li><a href="#" class="btn btn-gray active" data-group="all">Tudo</a></li>
                            <li><a href="#" class="btn btn-gray" data-group="webdesign">Design</a></li>
                            <li><a href="#" class="btn btn-gray" data-group="mobileapp">Aplicativos </a></li>
                            <li><a href="#" class="btn btn-gray" data-group="illustration">Illustrações</a></li>
                            <li><a href="#" class="btn btn-gray" data-group="branding">Ideias</a></li>
                            <li><a href="#" class="btn btn-gray" data-group="photography">Fotografia</a></li>
                        </ul>
        </li>
                <table class="table" class="table table-hover" align="center" width="100%">
                
                        <?php

                include_once("conexao.php");
                $sql = "SELECT * FROM produto where nome like '%%' order by rand()";
                $result = $conexao -> query($sql);
            $linha = 1;
            echo'<tr>';
            while($row = $result->fetch_assoc())    
       {
        echo '<td align="center">';
        echo '<h3><font color="#000099">'.$row['nome'].'</font></h3><br>';
        echo '<img src="img/'.$row['imagem'].'" width="200px" height="200px" /><br>';
        echo '<br><br>Preço : R$ '.number_format($row['valor'], 2, ',', '.');
        echo '<br><br><a href="carrinho.php?acao=add&id='.$row['idproduto'].'">
        <link rel="stylesheet" href="assets/css/buy.css">
        <button class="cart-button" button id="botao">   
	    <span class="add-to-cart">Add to caart</span>
	        <span class="added">Added</span>
	            <i class="fas fa-shopping-cart"></i>
	                <i class="fas fa-box"></i>
                    </a></div></button>';
            echo '</td>';

        if ($linha==3)
        {
            $linha = 0;
            echo '</tr><tr>';
        }
        $linha++;
    }
        echo '</tbody>
            </table>';
            $conexao ->close();
        
               
                
                    
                   
                 ?>   
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a class="site-title"><span>My</span>Games</a>
                    <p>Somos uma empresa especializada em criação e suporte em toda variedade de jogos, em todas as linguagens</p>
                    <p></p>
                </div>
                <div class="col-lg-offset-4 col-md-3 col-sm-4 col-md-offset-2 col-sm-offset-0 col-xs-6 ">
                    <h3>CONTATE-NOS</h3>
                    <ul class="list-unstyled contact-links">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@agencyperfect.com">info@mygames.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+37400800000">55 9728-6135 </a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><p>Sao Paulo, Brasil</p></li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <h3></h3>
                    <ul class="list-unstyled">
                        <li><a href="index.php  ">Home</a></li>
                        <li><a href="blog.html">Sobre</a></li>
                        <li class="active"><a href="portfolio.php"></a></li>
                        <li><a href="contact.php">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
       
                
                        <div class="text-right">
                            <p>&copy; MyGames</p>
                            <p>All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.copyright -->
    </footer><!-- /#footer -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script  src="script.js"></script>    



  
</body>
</html>