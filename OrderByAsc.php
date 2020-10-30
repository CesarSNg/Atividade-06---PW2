<?php
	$localhost = 'localhost';
	$user = 'root';
	$password = "";
	$db = "dbLivraria";
	
	$con = mysqli_connect($localhost,$user,$password,$db);
	
		if (mysqli_connect_errno($con)){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}else{

		$sql = "SELECT * FROM tbClientes ORDER BY nome ASC";

			$resultado = mysqli_query($con,$sql);

			echo "<h2>Dados</h2>";

		while($tbClientes = mysqli_fetch_array($resultado)){

		echo "Nome:" . " " . $tbClientes['nome'] . "<br><br/>" . "Tel:" . $tbClientes['telCel'] . "<hr/>" . "<br><br/>";
		}
	
		mysqli_close($con);
	}
?>
