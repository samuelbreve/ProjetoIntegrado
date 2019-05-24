<?php 
	 
	 include_once('conexao.php');

	 $razao_social = mysqli_real_escape_string($conn,$_POST['razao_social']);
	 $nome_fantasia = mysqli_real_escape_string($conn,$_POST['nome_fantasia']);
	 $email = mysqli_real_escape_string($conn,$_POST['email']);
	 $cnpj = mysqli_real_escape_string($conn,$_POST['cnpj']);
	 //$bandeira = mysqli_real_escape_string($conn,$_POST['bandeira']);
	 $endereco = mysqli_real_escape_string($conn,$_POST['endereco']);
	 $pais = mysqli_real_escape_string($conn,$_POST['pais']);
	 $estado = mysqli_real_escape_string($conn,$_POST['estado']);

	 $usuario = mysqli_real_escape_string($conn,$_POST['usuario']);
	 $senha = mysqli_real_escape_string($conn,$_POST['senha']);

	 $gasolina = mysqli_real_escape_string($conn,$_POST['gasolina']);
	 $gasolina_aditivada = mysqli_real_escape_string($conn,$_POST['gasolina_aditivada']);
	 $etanol = mysqli_real_escape_string($conn,$_POST['etanol']);
	 $diesel = mysqli_real_escape_string($conn,$_POST['diesel']);



	 $query = "INSERT INTO cliente (razao_social, nome_fantasia, email, cnpj, endereco, pais, estado) VALUES 
	 ('".$razao_social."','".$nome_fantasia."','".$email."','".$cnpj."','".$endereco."','".$pais."','".$estado."')";

	  

	 
	if(mysqli_query($conn,$query)){
		$last_id = mysqli_insert_id($conn);  

        echo("Inserido com sucesso!!!".$last_id);

              
        $query2 = "INSERT INTO login (id_usuario, usuario, senha) values 
	 	 (".$last_id.",'".$usuario."', '".$senha."')";

	 	 $queryPreco = "INSERT INTO preco (id_posto, gasolina, gasolina_aditivada, etanol, diesel) values 
	 	 (".$last_id.",".$gasolina.", ".$gasolina_aditivada.",".$etanol.",".$diesel.")";
     //    if(mysqli_query($conn,$query2) and mysqli_query($conn,$queryPreco)){
     //    	echo ("Login beleza");
     //    	header('location:../bootstrap-wizard-master/perfil.php');
     //    }
     //    else{
     //    	echo($query2."<br>");
	  		// die("falha na conexao login: " . mysqli_connect_error());
     //    }     

     mysqli_query($conn, $query2);
     mysqli_query($conn, $queryPreco);   
    }
    else{
        echo($query."<br>");
	  	die("falha na conexao: " . mysqli_connect_error());
	  	}


?>