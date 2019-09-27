<!DOCTYPE html>
<html>
<head>
	<title>Jogo</title>
</head>
<body>
	<b><h1>Inicialmente digite as informações abaixo!</h1></b><br>
	<form method="POST" action="dados.php">
		<b>Digite o seu nome:</b><input type="text" name="nome" required=""><br><br>
		<b>Digite a sua idade: </b><input type="text" name="idade" required=""><br><br>

		<input type="submit" name="btn_enviar" value="Continuar">
		<input type="reset" name="btn_apagar" value="Apagar dados">
		<input type="button" name="btn_confirmar" value="Voltar a tela de confirmação" onclick="location.href = 'confirma.php'">
	</form>
</body>
</html>