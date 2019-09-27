<!DOCTYPE html>
<html>
<head>
	<title>Segundos passados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php //Escreva um programa em PHP que recebe um horário (horas, minutos e segundos) e determina quantos segundos já se passaram desde que o dia começou.
		$hora = $_POST['hora'];
		$minutos = $_POST['minutos'];
		$segundos = $_POST['segundos'];

		echo "Se são $hora : $minutos : $segundos . Então sepassaram: ".((($hora*60)*60)+($minutos*60)+$segundos)." segundos";
	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>