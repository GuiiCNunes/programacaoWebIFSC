<!DOCTYPE html>
<html>
<head>
	<title>Segundos faltantes</title>
	<meta charset="utf-8">
</head>
<body>
	<?php //Escreva um programa em PHP que recebe um horário (horas, minutos e segundos) e determina quantos segundos ainda faltam para terminar o dia (considere o dia com 24 horas).
		$hora = $_POST['hora'];
		$minutos = $_POST['minutos'];
		$segundos = $_POST['segundos'];

		echo "Se são $hora : $minutos : $segundos . Então ainda faltam: ".(((24*60)*60)-((($hora*60)*60)+($minutos*60)+$segundos))." segundos";
	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>