<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>

<?php

	$usuario = "root";
	$senha = "usbw";
	$host = "localhost";
	$banco = "cadastro bolsa cao";		
	try{		
		$conexao = new PDO('mysql:host='. $host . ':3307;dbname='.$banco, $usuario, $senha);
				
		
	}catch(PDOException $e){
		echo "Erro:" . $e->getMessage();	
		
	}
?>








</body>
</html>