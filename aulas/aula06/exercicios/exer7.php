<!DOCTYPE html>
<html>
<head>
	<title>Exercício 7</title>
	<meta charset="utf-8">
	<!--Faça um programa em php que resolva seguinte formula: imposto = salario * 0.2.!-->
</head>
<body>
	<form method="GET" action="exer7.php">
		<h3>Imposto:</h3><br><br>
		Digite o salário: <input type="text" name="sal"><br><br>
		<input type="submit" name="Enviar">
	</form>
	<?php
		if(isset($_GET['sal'])) {
			$sal = $_GET['sal'];
			$imposto = $sal * 0.2;
			echo "O imposto sobre o salário de $sal é $imposto";
		} ;
	?>
</body>
</html>