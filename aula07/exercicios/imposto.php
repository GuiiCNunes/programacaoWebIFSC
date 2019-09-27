<!DOCTYPE html>
<html>
<head>
	<title>Imposto</title>
	<meta charset="utf-8">
	<!--Faça um programa em php que resolva seguinte formula: imposto = salario * 0.2. !-->
</head>
<body>
	<?php 
		$salario = $_GET['salario'];
		$imposto = $salario * 0.2;
		echo "O imposto a ser cobrado no salário de $salario é de: $imposto";
	?>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>