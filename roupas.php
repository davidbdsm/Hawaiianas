<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Meu site</title>
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">


<!--Scripts do navbar-->


  <!-- script do rodapé-->

  

  <link rel="stylesheet" type="text/css" href="css/style.css">

<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<?php


include 'navbar.php';


?>

<?php 

    include "banco.php";

?>


</section>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                    <ul class=" list-group category_block">
                        <li class="list-group-item"><a href="cels.php">Celulares</a></li>
                        <li class="list-group-item"><a href="eletro.php">Eletrônicos</a></li>
                        <li class="list-group-item"><a href="games.php">Games</a></li>
                        <li class="list-group-item"><a href="info.php">Informática</a></li>
                        <li class="list-group-item"><a href="livros.php">Livros</a></li>
                        <li class="list-group-item"><a href="roupas.php">Roupas</a></li>
                    </ul>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">Promoção do dia</div>
                <div class="card-body">
                    <img class="img-fluid" src="img/xiaomi.jpg" />
                    <h5 class="card-title">Xiaomi Mi 5</h5>
                    <p class="card-text"> Registre suas lembranças com um simples toque na tela para que você possa viver o momento e mais tarde compartilhar, sem precisar usar nenhum filtro.</p>
                    <p class="bloc_left_price">R$ 549,99</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-9">
        <?php  
        if(empty($_POST['pesquisa'])){
            $pesquisa = "0";
        }else{
            $pesquisa = $_POST['pesquisa'];
        }
  if($pesquisa == "0"){
        $query = "select * from produto where categoria = 'roupas' "; 
      }else{
        // caso venha de uma consulta, utilizamos o comando like, para pegar nome/cargo ou parte do nome/cargo(sempre de acordo com a consulta)
      $query = "select * from produto where nome like '%$pesquisa%'"; 
                  
      }
      $consulta = mysqli_query($con, $query);
      
      // as próximas linhas, servem para exibir uma mensagem de erro, caso a pesquisa não tenha nenhum retorno!
      $total = mysqli_num_rows($consulta);
      if($total == 0){
        echo "Nenhum produto encontrado!";
      }
      echo "<div class=\"row\">";

      while($f = mysqli_fetch_array($consulta)){
      // os comandos abaixo, serve para pegar as informações que estão no banco de dados e colocá-los em uma variável
        $nome = $f['nome'];
        $valor = $f['valor'];
        $valor = number_format($valor, 2, ',','.');
        $descricao = $f['descricao'];
        $id = $f['id'];
        $img = $f['img'];


      

    ?>

            
                <div class="col-xs-12 col-md-4">
                    <div class="card2 ">
                        <div class="card-header">
                                <h5> <?php echo "$nome"; ?></h5>
                        </div>
                        <div class="card-body prod">
                           <a href="produto.php?id=<?php echo $id; ?>"><img class="img-fluid" src="produtos/<?php echo $img; ?>" /><br></a>
                            <a  class="btn btn-dark" ><?php echo "$valor"; ?></a>
                            <a href="#carrinho.html" class="btn btn-info"> Comprar</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
     
                
        </div>
    </div>
</div>
</div>




<?php


include 'footer.php';

?>


</body>
</html>
