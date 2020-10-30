<?php
	$localhost = 'localhost';
	$user = 'root';
	$password = "";
	$db = "dbLivraria";
	
	$con = mysqli_connect($localhost,$user,$password,$db);
	
		if (mysqli_connect_errno($con)){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}
        $sql1 = "DELETE FROM tbClientes WHERE nome = "César Santana Ng" ";
        
        mysqli_query($con,$sql1);
            
		echo "Registro excluido!!!";
	
		mysqli_close($con);
	}
?>
