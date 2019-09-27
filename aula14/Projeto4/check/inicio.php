<!DOCTYPE html>
<html>
<head>
	<title>Projeto 3</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Pesquisa de Satisfação</h1><br>
	<form method="POST" action="pesquisa.php">
		Nome: <input type="text" name="nome" required=""><br>
		Idade: <input type="number" name="idade" required=""><br>
		<b>Escolha o(s) gênero(s) musical(is) de sua preferência:</b><br>
		<input type="checkbox" name="musica[]" value="sertaneja"> Sertaneja
		<input type="checkbox" name="musica[]" value="rock"> Rock
		<input type="checkbox" name="musica[]" value="pagode"> Pagode
		<input type="checkbox" name="musica[]" value="classica"> Clássica
		<input type="checkbox" name="musica[]" value="funk"> Funk
		<input type="checkbox" name="musica[]" value="tecno"> Tecno <br><br>
		<b>Escolha o(s) gÊnero(s) de filme(s) de sua preferência:</b><br>
		<input type="checkbox" name="filme[]" value="terror"> Terror
		<input type="checkbox" name="filme[]" value="romance"> Romance
		<input type="checkbox" name="filme[]" value="aventura"> Aventura
		<input type="checkbox" name="filme[]" value="comedia"> Comédia
		<input type="checkbox" name="filme[]" value="drama"> Drama
		<input type="checkbox" name="filme[]" value="infantil"> Infantil <br><br>

		<input type="checkbox" name="compartilhar" checked=""> Você permite que suas respostas sejam compartilhadas com outros usuários? <br><br>

		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_apagar" value="Apagar Dados">

	</form>

</body>
</html>