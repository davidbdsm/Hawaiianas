 

<?php 
	
	session_start();
	if(isset($_SESSION['email'])){
			$email = $_SESSION['email'];
		
		
	}else{
		header("Location: index.php");
	}


	include "banco.php";
	$query = "select * from cliente where email = '$email'";
	$consulta = mysqli_query($con, $query);
	
	while($u = mysqli_fetch_array($consulta)){
		$nome = $u['nome'];
	}



	echo "$nome conectado!";
	header("refresh: 2;index.php");

?>





