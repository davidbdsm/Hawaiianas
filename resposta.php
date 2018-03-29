<?php 
	$email = $_POST['email'];
	$senha  = md5($_POST['senha']);
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$nasc = $_POST['nasc'];

	include "banco.php";

	$query = "insert into cliente(email, senha, nome, cpf, nasc)
		    values ('$email', '$senha', '$nome', '$cpf', '$nasc')";


$consulta = mysqli_query($con, $query);


	header("Location: index.php");

?>

