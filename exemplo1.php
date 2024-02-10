<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
    
    <?php
    session_start();
    ?>
<?php
    $_SESSION['nome']='João Pedro';
    if(isset($_SESSION['nome']))
    echo "Meu nome é ".$_SESSION['nome'];
    else
        echo "Sessão não iniciada";
?>




</body>
</html>