<!DOCTYPE html>
<html>
<head>
	<!-- Faça um programa em PHP onde o usuário terá que informar os seguintes dados:
		• Nome completo
		• CPF
		• Valor do produto a ser comprado
		!-->
	<title>Dados Usuário</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="exer9.php">
		<h3>Dados do Usuário</h3><br><br>
		Nome Completo: <input type="text" name="nome"><br>
		CPF: <input type="text" name="cpf"><br>
		Valor do produto:  <input type="text" name="produto"><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btnLimpar" value="Limpar">
	</form>
</body>
</html>