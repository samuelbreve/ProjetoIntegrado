<?php 
	 
// 	 include_once('conexao.php');

// 	 $query = "select * from cliente";

// 	 $result = $conn->query($query);	

// 	 if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["id"]. " " . $row["lastname"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

	 // if (!mysqli_query($conn,$query)) {
	 // 	echo($query."<br>");
	 // 	die("falha na conexao: " . mysqli_connect_error());
	 // }else{
	 // 	echo("Inserido com sucesso!!!");
	 // 	header('location:perfil.php');
	 //}

	include_once('conexao.php');
	//$last_id = $conn->insert_id;
	//$conn->insert_id;
	//$query = mysqli_query($conn, "select * from cliente where id = ".$last_id." ");
	//$teste = mysqli_fetch_array($query);
	//echo $teste['id'];
	$query="SELECT LAST_INSERT_ID from cliente";
	mysql_query($conn, $query);

    //$result = mysqli_query($conn, $query);
    //$row = mysqli_fetch_array($result, MYSQLI_NUM);			
	//echo $row[0];									
    //printf ("%s (%s)\n", $row[0], $row[1]);  

						                                  
?>