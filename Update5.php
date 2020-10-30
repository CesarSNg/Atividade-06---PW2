<?php
	$localhost = 'localhost';
	$user = 'root';
	$password = "";
	$db = "dbLivraria";
	
	$con = mysqli_connect($localhost,$user,$password,$db);
	
		if (mysqli_connect_errno($con)){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}else{

        $sql1 = "UPDATE tbClientes SET endereco = "Rua X" WHERE endereco = "Rua Y"";
        
        mysqli_query($con,$sql1);
            
        $sql2 = "SELECT * FROM tbClientes WHERE endereco = "Rua X"";

        $resultado = mysqli_query($con,$sql2);

			echo "<h2>Dados</h2>";

		while($tbClientes = mysqli_fetch_array($resultado)){

		echo "Nome:" . " " . $tbClientes['nome'] . "<br><br/>" . "Rua:" . $tbClientes['endereco'] . "<hr/>" . "<br><br/>";
		}
	
		mysqli_close($con);
	}
?>
