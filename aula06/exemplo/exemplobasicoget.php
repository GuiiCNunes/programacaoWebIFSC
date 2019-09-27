<!DOCTYPE html>
<html>
<head>
	<title>Exemplo Básico GET</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="GET" action="exemplobasicoget.php">
		<h2>Teste</h2><br><br>		
		Digite um Número: <input type="text" name="numero" required="">
		<br><br>
		<input type="submit" name="btn_enviar" value="Enviar">
	</form>

	<?php 
		if (isset($_GET['numero'])) {
			echo "<br><br><br>Resultado do processamento<br><br>";
			$numero = $_GET['numero'];
			echo "O número digitado foi: $numero";
		}

	?>
</body>
</html>