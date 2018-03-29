
<?php 
    session_start();
    if(isset($_SESSION['email'])){
        
       $email = $_SESSION['email'];
       $nome = $_SESSION['nome'];
    }
?>
<meta name="viewport" content="width=320">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
       <a href="index.php"> <img class="img-fluid" href="index.php" src="img/logo.png" /><br></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container">

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
           

                <form class="  pesquisa form-inline my-2 my-lg-0 ">
                    <div class=" input-group input-group-sm">
                        <input type="text" name="pesquisa" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  placeholder="Search...">
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
            </div>
        </div>

                <div class=" usuario btn btn-secondary ">
                    
                    <i class="far fa-user"></i>


                </div>
                <div class=" usuario btn btn-secondary">

                  <?php
                echo "<div class=\"row\">";

                     if(empty($_SESSION['email'])) {
                        echo "<a href=\"login.php\">Login</a> ou <a href=\"cadastro.php\">Cadastre-se</a>";
                    
                        }else{
                            $nome = $_SESSION['nome'];
                            echo "Seja bem vindo $nome";
                            echo " | <a  <a href=\"sair.php\">Sair</a>";

                        }

                    ?>
                    </div>
                    </div>

                
            </form>
        </div>
</nav>
