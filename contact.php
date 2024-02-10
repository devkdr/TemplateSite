<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Contato | MyGames</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

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
                   
                    <a href="index.php" class="site-title"><span>My</span>Games</a>

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
                        <li><a href="portfolio.php">Produtos</a></li>
                        <li><a href="blog.html ">Sobre</a></li>
                        <li class="active"><a href="contact.php">Contato</a></li>
                        <li><a href="ui-elements.html"></a></li>
                        
                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay subpage-hero contact-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Contato</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Contato</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-contact-us">

            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h2>Contate-nos</h2>
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                        

                                    <div class="form-group">
                                      <label for="name">Nome:</label>
                                      <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="email">E-mail:</label>
                                      <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="message">Assunto:</label>
                              <input class="form-control" name="subject"></input>
                            </div>
                            <div class="form-group">
                              <label for="message">Descreva:</label>
                              <textarea class="form-control form-control-comment" name="message"></textarea>
                            </div>
                            <div class="text-center">
   
                                <button class="btn btn-green" type="submit">Contate-nos</button>
                            </div>
                        </form>
                        <?php
                        if($_POST)
                        {
                        $email_remetente = "aula@25dejulho.online";
                        $assunto = $_POST['subject'];
                        $mensagem = $_POST['message'];

                        $email_usuario ='joaopedrogoify10@gmail.com';
                        $headers = "MIME-Version: 1.1\n";
                        $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
                        $headers .= "From: $email_remetente\n"; // remetente
                        $headers .= "Return-Path: $email_remetente\n"; // return-path
                        $headers .= "Reply-To: $email_usuario\n"; // Endereço (devidamente validado) que o seu usuário informou no contato
                        $envio = mail("joaopedrogoify10@gmail.com", $assunto, $mensagem, $headers, "-f$email_remetente");
                        }
                      ?>

                    </div>
                    <div class="col-sm-5">
                        <div class="contact-info">
                            <h2>Nossas Informações</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Endereço</h3>
                                    <ul class="list-unstyled">
                                        <li>New York, EUA</li>
                                        <li>100 Mainstreet Center</li>
                                    </ul>
                                    <h3>E-mail</h3>
                                    <a href="mailto:joaopedrogoify10@gmail.com" target="_blank">joaopedrogoify10@gmail.com</a>
                                    <h3>Phone</h3>
                                    <a href="tel:2083339296" target="_blank">55 9728-6135</a>
                                    <h3>Fax</h3>
                                    <p>55 9728-6135</p>
                                </div>
                            </div>
                        </div><!-- /.contact-info -->
                    </div>
                </div>
            </div>
            
        </section><!-- /.section-contact-us -->
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.27990907297!2d-74.25987368715495!3d40.697670064588735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNova%20Iorque%2C%20NY%2C%20EUA!5e0!3m2!1spt-BR!2sbr!4v1648555905131!5m2!1spt-BR!2sbr" width="1320" height="400" style="border:50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
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
                    <h3>Contate-nos</h3>
                    <ul class="list-unstyled contact-links">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@agencyperfect.com">info@agencyperfect.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+37400800000">55 9728-6135 </a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><p>NewYork,NY</p></li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <h3></h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Sobre</a></li>
                        <li><a href="portfolio.html">Produtos</a></li>
                        <li class="active"><a href="contact.html">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="social-links">
                            <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                            <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                        </div><!-- /.social-links -->
                    </div>
                    <div class="col-xs-4">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>