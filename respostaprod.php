<?php 
	$nome = $_POST['nome'];
	$valor= $_POST['valor'];
	$descricao = $_POST['descricao'];
	$categoria = $_POST['categoria'];



	include "banco.php";
	
	$query = "insert into produto(nome, valor, descricao, categoria)values('$nome', '$valor', '$descricao', '$categoria')";
	mysqli_query($con, $query);
	
	include "upload.php";







	header("Location: index.php");

?>

