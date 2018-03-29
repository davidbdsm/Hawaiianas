<!DOCTYPE html>
<html>
<head>
	<title>Hawaiianas</title>
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

<!--Scripts do navbar-->


  <!-- script do rodapé-->

  

  <link rel="stylesheet" type="text/css" href="css/produtos.css">

<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<meta name="viewport" content="width=320">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<?php

include 'navsobre.php';


?>
<br/>
<br/>
<br/>


<?php 
    if(empty($_GET['id'])){
        header("Location:index.php");
    }else{
        $id = $_GET['id'];
    }

    include "banco.php";

    $query = "select * from produto where id = $id limit 1";
    $consulta = mysqli_query($con, $query);

    if($p = mysqli_fetch_assoc($consulta)){
        $nome = $p['nome'];
        $descricao = $p['descricao'];
        $valor = $p['valor'];
        $valor2 = $p['valor'];
        $valor = number_format($valor, 2, ',','.');
        $img = $p['img'];
    }
?>
<div class="container">
    <div class="row">
        <!-- Image -->
        <div class=" prodss col-12 col-lg-6">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <a href="" data-toggle="modal" data-target="#productModal">
                        <img src="produtos/<?php echo $img; ?>"  />
                    </a>
                </div>
            </div>
        </div>
    <div class="col-12 col-lg-6 add_to_cart_block">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <p class="price">R$ <?php echo $valor; ?></p>
                    <form method="get" action="cart.html">
                      
                        <div class="form-group">
                            <label>Quantidade :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1">
                                <div class="input-group-append">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <a href="cart.html" class="btn btn-success btn-lg btn-block text-uppercase">
                            <i class="fa fa-shopping-cart"></i> Add To Cart
                        </a>
                    </form>
                    <div class="product_rassurance">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>Entrega rápida</li>
                            <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br/>Pagamento seguro</li>
                            <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br/>+55 21 998889898</li>
                        </ul>
                    </div>
                    <div class="reviews_product p-3 mb-2 ">
                        3 reviews
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        (4/5)
                    </div>
                   
        <?php 
            echo "<select>";
            for($p = 1;$p<=12;$p++){
                $valor = $valor2/$p;
                $valor = number_format($valor, 2, ',','.');
                echo "<option>$p x de R$ $valor</option>";
                if($p >= 10){
                    $valor2 = $valor2 * 1.05;
                }
            }
            echo "</select>";
        ?>

                </div>
            </div>
        </div>
    </div>

     <div class="row" >
            <div class="col-12">
                <div class="  card border-light mb-3">
                    <div class="  card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> Descrição</div>
                    <div class="  card-body">
            <p><?php echo $descricao; ?></p>
                           
                    </div>
                </div>
            </div>
      </div>
</div>


<?php


include 'footer.php';

?>


</body>
</html>