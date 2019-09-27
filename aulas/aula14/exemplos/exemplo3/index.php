<!DOCTYPE html>
<html>
<head>
	<title>Exemplo Checkbox</title>
</head>
<body>
	<form action="exemplocheckbox.php" method="POST">
		<b>Escolha o(s) esporte(s) de sua preferência:</b><br><br>
		<input type="Checkbox" name="esportes[]" value="futebol"> Futebol
		<input type="Checkbox" name="esportes[]" value="volei"> Volei
		<input type="Checkbox" name="esportes[]" value="basquete"> Basquete
		<input type="Checkbox" name="esportes[]" value="tenis"> Tênis
		<input type="Checkbox" name="esportes[]" value="truco"> Truco
		<br><br>
		<input type="Checkbox" name="news" checked=""><b>Você deseja receber nossa Newsletter?</b>
		<br><br>
		<input type="submit" name="btn_enviar" value="Enviar">
	</form>

</body>
</html>