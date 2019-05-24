<?php 
	 
	 include_once('conexao.php');

	 $usuario = mysqli_real_escape_string($conn,$_POST['nome']);
	 $senha = mysqli_real_escape_string($conn,$_POST['cpf']);

	 $query = "INSERT INTO login (usuario, senha) VALUES 
	 ('".$usuario."','".$senha."')";

	 if (!mysqli_query($conn,$query)) {
	 	echo($query."<br>");
	 	die("falha na conexao: " . mysqli_connect_error());
	 }else{
	 	echo("Inserido com sucesso!!!");
	 	header('location:perfil.php');
	 }
?>