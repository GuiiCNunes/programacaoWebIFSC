<!DOCTYPE html>
<html>
<head>
	<!--Faça um programa em PHP que receba o ano de nascimento de uma pessoa e o ano atual,
	calcule e mostre: Obs. Considere que um mês tem 30 dias / um mês tem 4 semanas.
a) a idade dessa pessoa em anos;
b) a idade dessa pessoa em meses;
c) a idade dessa pessoa em dias;
d) a idade dessa pessoa em semanas. !-->
	<title>Conversor de idade</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="exer6.php">
		<h3>Conversor de idade</h3><br><br>
		Nascimento: <input type="number" name="nasc"><br>
		Atual: <input type="number" name="atual"><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btnLimpar" value="Limpar">
	</form>
</body>
</html>