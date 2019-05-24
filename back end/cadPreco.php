<?php 
	 
	 include_once('conexao.php');

	 $gasolina = mysqli_real_escape_string($conn,$_POST['nome']);
	 $gasolina_aditivada = mysqli_real_escape_string($conn,$_POST['cpf']);
	 $etanol = mysqli_real_escape_string($conn,$_POST['rg']);
	 $diesel = mysqli_real_escape_string($conn,$_POST['estado_civil']);
	 
	 $query = "INSERT INTO preco (gasolina, gasolina_aditivada, etanol, diesel) VALUES 
	 ('".$gasolina."','".$gasolina_aditivada."','".$etanol."','".$diesel."')";

	 if (!mysqli_query($conn,$query)) {
	 	echo($query."<br>");
	 	die("falha na conexao: " . mysqli_connect_error());
	 }else{
	 	echo("Inserido com sucesso!!!");
	 	header('location:perfil.php');
	 }
?>