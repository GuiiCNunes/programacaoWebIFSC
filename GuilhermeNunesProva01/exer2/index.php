<!DOCTYPE html>
<html>
<head>
	<title>Cantina IFSC</title>
	<meta charset="utf-8">
	<!--Controlar tempo de cozimento; ler 3 informações; cozinha funciona das 8 as 19
		entradas: hora de inicio; minutos de inicio; tempo desejado de cozimento(em minutos);
		saida: hora e minutos em que o cozimento deve ser interrompido;
	!-->
</head>
<body>
	<form method="POST" action="exer2.php">
		Hora de inicio: <input type="number" name="horaini" required=""><br>
		Minuto de inicio: <input type="number" name="minutoini" required=""><br>
		Tempo desejado de cozimento(em minutos): <input type="number" name="desejado" required=""><br><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btnLimpar" value="Limpar">

	</form>
</body>
</html>