<!DOCTYPE html>
<html>
<head>
	<title>Exercício 5</title>
	<meta charset="utf-8">
	<!--Faça um programa em php que mostre a media aritmética entre dois números.!-->
</head>
<body>
	<form method="GET" action="exer5.php">
		<h3>A média de dois números</h3><br><br>
		Digite o Primeiro número: <input type="text" name="n1" required=""><br>
		Digite o Segundo número: <input type="text" name="n2" required=""><br>
		<input type="submit" name="btnEnviar" name="Enviar">
	</form>
	<?php 
		if (isset($_GET['n1']) && isset($_GET['n2'])) {
			$n1 = $_GET['n1'];
			$n2 = $_GET['n2'];
			$media = ($n1 + $n2)/2;
			echo "A média dos números $n1 e $n2 é $media";
		}
	?>
</body>
</html>