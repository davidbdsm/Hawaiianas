<!doctype html>

<html>
<head>
        <meta charset="utf-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

          <link rel="stylesheet" type="text/css" href="css/login.css">

               
<!------ Include the above in your HEAD tag ---------->
</head>
 <body>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
       <a href="index.php"> <img class="img-fluid" href="index.php" src="img/logo.png" /><br></a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
           

            <form class="form-inline my-2 my-lg-0 ">
                <div class=" pesquisa input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="carrin">
                <a class=" btn btn-sm ml-3 btn-secondary" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Carrinho

                </a>

                </div>
                <div class=" usuario btn btn-secondary ">
                    
                    <i class="far fa-user"></i>


                </div>
                <div class=" usuario btn btn-secondary">

                <a href="login.php">Login</a> ou <a href="cadastro.php">Cadastre-se</a>

                </div>
            </form>
        </div>
</nav>


</br>
</br>
</br>
</br>
</br>
</br>

<div class="container">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" >
    </div>

    <!-- Login Form -->
    <div class="loginn"  >
        <form action="loginresp.php" method="POST">
          <input type="text" id="email" class="fadeIn second" name="email" placeholder="login">
          <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="password">
    </div>
    <div class="botao">
          <input type="submit" class="fadeIn fourth" value="Logar">
          <a href="cadastro.php" class="fadeIn fourth">Cadastre-se</a>
    </div>
        </form>
    </div>

</div>
</div>
</div>

</br>
</br>
</br>
</br>

<?php


include 'footer.php';

?>


</body>
</html>