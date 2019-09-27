<!DOCTYPE html>
<html>
<head>
	<title>Exercício 3</title>
	<meta charset="utf-8">
	<!--Faça um programa em php que mostre a subtracão de três números.!-->
</head>
<body>
	<form method="GET" action="exer3.php">
		<h3>Subtração de três números</h3><br><br>
		Digite o Primeiro número <input type="text" name="n1" required=""><br>
		Digite o segundo número <input type="text" name="n2" required=""><br>
		Digite o terceiro número<input type="text" name="n3" required=""><br><br>
		<input type="submit" name="btnEnviar"  name="Enviar">
	</form>
	<?php 
		if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])) {
			$n1 = $_GET['n1'];
			$n2 = $_GET['n2'];
			$n3 = $_GET['n3'];
			$sub = $n1 - $n2 - $n3;
			echo "A subtração de $n1-$n2-$n3=$sub";
		}
	?>
</body>
</html>