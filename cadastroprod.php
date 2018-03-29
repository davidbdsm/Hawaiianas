<!doctype html>

<html>
<head>
        <meta charset="utf-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

          <link rel="stylesheet" type="text/css" href="css/style.css">

               
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

<br>
<br>

<div  class="container">
    
  <form method="post" action="respostaprod.php" enctype="multipart/form-data">
  <fieldset style="min-height: 650px;">
    <legend>Cadastro de produtos</legend>
    
    
    <div class="form-group">
      <label for="exampleInputtext1">Nome produto</label>
      <input type="text" class="form-control" name="nome" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Coloque o nome do produto">
    </div>
    

    <div class="form-group">
      <label for="exampleInputtext1">Valor produto</label>
      <input type="float" class="form-control" name="valor" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Coloque o valor do produto">
    </div>
    
    <div class="form-group">
  <label for="comment">Descrição do produto:</label>
  <textarea class="form-control" name="descricao" rows="10" id="descricao"></textarea>
    </div>

    <div class="form-group"  >  
      <label for="comment">Categoria:</label>
        <select name="categoria">
          <option value="celulares">Celulares</option>
          <option value="eletronicos">Eletrônicos</option>
          <option value="games">Games</option>
          <option value="info">Informática</option>
          <option value="livros">Livros</option>
          <option value="roupas">Roupas</option>
        </select>
  </div>
    
    <div class="form-group">
      <label for="imagem">Imagem do produto</label>
      <input type="file" class="form-control" name="arquivo" id="imagem" aria-describedby="textHelp" accept="img/jpeg, img/png, img/jpg" >
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button><br><br>
  </fieldset>
</form>


</div>





<?php


include 'footer.php';

?>
  
</body>
</html>