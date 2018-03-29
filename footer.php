
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="footer">
    <div class="footer1">
<div class="container-fluid">
    
    <div class="container ">
    <div class="row">
        <div class="col-sm-4">
          <h2>About Us</h2><p>
                           <div class="myframegmap"> 
                           

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227177.49390558133!2d-48.631920490051854!3d-27.167352484419723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8a6a6f274d185%3A0xf25e2f1c1cb70fef!2sBombinhas+-+SC!5e0!3m2!1spt-BR!2sbr!4v1520513447579" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div></p><br>
        </div>
        <div class="col-sm-4">
            <h2>Home</h2>
            <p>
                <i class="fa fa-home"></i>    <a href="index.php"> Início</a><br/>
                <i class="fa fa-user-o"></i>    <a href="sobre.php #sobre "> Sobre nós</a><br/>
                <i class="fa fa-map-marker"></i>    <a href="sobre.php #fale"> Fale conosco</a><br/>
            <?php 
                if(isset($_SESSION['email'])){
                    $email = $_SESSION['email'];
                    if($email == 'adm@adm.com'){
                        ?>
                            <i class="fa fa-product-hunt"></i>    <a href="cadastroprod.php"> cadastro produtos</a><br/>
                        <?php
                    }
                }

             ?>

          


            </p>


        </div>
        <div class="col-sm-4 ">
            <h2>Nos contate</h2>
            <p >
             
                <i class="fa fa-phone"></i>    <a href="tel:0123456789"> (+55) 21 2569-8989</a><br>
                <i class="fa fa-envelope"></i>    <a href="mailto:abc@abc.com"> hawaiianas@oi.com</a><br>
                <i class="fa fa-map-marker"></i>    Tão tão distante, Brasil
            </p>
                
            <br>
        </div>
    </div>
        <div class="clear30"></div>
</div>
</div></div>



</div>

