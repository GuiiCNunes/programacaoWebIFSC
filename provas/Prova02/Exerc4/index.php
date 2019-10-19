<!DOCTYPE html>
<html>
<head>
	<title>Exercício 4</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST"	action="historico.php">
		<fieldset>
		<h4>Escreva os dados do primeiro aluno:</h4><br>
		Nome: <input type="text" name="nome1" required=""><br>
		Nota em Matemática: <input type="text" name="mtm1" required=""><br>
		Nota em Português: <input type="text" name="pt1" required=""><br>
		Nota em Biologia: <input type="text" name="bio1" required=""><br>
		</fieldset>	
		<fieldset>
		<h4>Escreva os dados do segundo aluno:</h4><br>
		Nome: <input type="text" name="nome2" required=""><br>
		Nota em Matemática: <input type="text" name="mtm2" required=""><br>
		Nota em Português: <input type="text" name="pt2" required=""><br>
		Nota em Biologia: <input type="text" name="bio2" required=""><br>
		</fieldset>
		<fieldset>
		<h4>Escreva os dados do teceiro aluno:</h4><br>
		Nome: <input type="text" name="nome3" required=""><br>
		Nota em Matemática: <input type="text" name="mtm3" required=""><br>
		Nota em Português: <input type="text" name="pt3" required=""><br>
		Nota em Biologia: <input type="text" name="bio3" required=""><br>
		</fieldset>	<br>
		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">
	</form>
</body>
</html>