<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="calcular.php">
		<h2>Seja Bem Vindo</h2><br><br>
		Digite seu nome: <input type="text" name="nome" required=""><br>
		Digite o primeiro número inteiro: <input type="number" name="n1" required=""><br>
		Digite o segundo número inteiro: <input type="number" name="n2" required=""><br>
		<b>Qual operação matemática você deseja fazer com os números digitados?</b><br>
		<input type="radio" name="calculo" value="soma" required=""> Soma
		<input type="radio" name="calculo" value="subtracao"> Subtração
		<input type="radio" name="calculo" value="divisao"> Divisão
		<input type="radio" name="calculo" value="multiplicacao"> Multiplicação<br><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btnLimpar" value="Limpar">
		
	</form>

</body>
</html>