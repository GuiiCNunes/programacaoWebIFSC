<!DOCTYPE html>
<html>
<head>
	<title>Criptografia Julio Cersar</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="criptografia.php">
		<fieldset><h2>Criptografar</h2>
			<h4>Insira a frase a ser criptografada entre aspas duplas("<i>frase</i>") e minuscula</h4><br>
			<input type="text" name="frase" required=""><br>
			<h4>Insira o número de casas utilizados</h4><br>
			<input type="number" name="casas" required=""><br><br>
			<input type="submit" name="btnEnviar" value="Enviar">
			<input type="reset" name="btnLimpar" value="Limpar">
	</fieldset></form>
	<form method="POST" action="descriptografar.php">
		<fieldset><h2>Descriptografar</h2>
			<h4>Insira a frase a ser descriptografada entre aspas duplas("<i>frase</i>") e minuscula</h4><br>
			<input type="text" name="frase" required=""><br>
			<h4>Insira as casas para conversão</h4><br>
			<input type="number" name="casas" required=""><br><br>
			<input type="submit" name="btnEnviar" value="Enviar">
			<input type="reset" name="btnLimpar" value="Limpar">
		</fieldset>		
	</form>
</body>
</html>