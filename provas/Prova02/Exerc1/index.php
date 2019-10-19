<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="calcular.php">
		<h3>Escreva 5 números inteiros</h3><br><br>
		Primeiro número: <input type="number" name="n1" required=""> <br>
		Segundo número: <input type="number" name="n2" required=""> <br>
		Terceiro número: <input type="number" name="n3" required=""> <br>
		Quarto número: <input type="number" name="n4" required=""> <br>
		Quinto número: <input type="number" name="n5" required=""> <br><br>
		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">
	</form>
</body>
</html>