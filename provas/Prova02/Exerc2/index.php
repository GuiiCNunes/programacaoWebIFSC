<!DOCTYPE html>
	<html>
	<head>
		<title>Exercício 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form method="POST" action="processar.php">
			<h3>Escreva o Departamento, Nome e Salário de 3 funcionários</h3><br><br>
			Primeiro Departamento: <input type="text" name="depart1" required=""><br>
			Primeiro Nome: <input type="text" name="nome1" required=""><br>
			Primeiro Salário: <input type="text" name="sal1" required=""><br><br>
			Segundo Departamento: <input type="text" name="depart2" required=""><br>
			Segundo Nome: <input type="text" name="nome2" required=""><br>
			Segundo Salário: <input type="text" name="sal2" required=""><br><br>
			Terceiro Departamento: <input type="text" name="depart3" required=""><br>
			Terceiro Nome: <input type="text" name="nome3" required=""><br>
			Terceiro Salário: <input type="text" name="sal3" required=""><br><br>
			<input type="submit" name="btn_enviar" value="Enviar">
			<input type="Reset" name="btn_limpar" value="Limpar">
		</form>
	</body>
	</html>	