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
		<select name="musica[]" multiple="" title="Segure CTRL para selecionar mais">
			<option value="Sertaneja">Sertaneja</option>
			<option value="Rock">Rock</option>
			<option value="Pagode">Pagode</option>
			<option value="Clássica">Clássica</option>
			<option value="Funk">Funk</option>
			<option value="Tecno">Tecno</option>
		</select>
		<br><br>
		<b>Escolha o(s) gÊnero(s) de filme(s) de sua preferência:</b><br>
		<select name="filme[]" multiple="" title="Segure CTRL para selecionar mais">
			<option value="Terror">Terror</option>
			<option value="Romance">Romance</option>
			<option value="Aventura">Aventura</option>
			<option value="Comédia">Comédia</option>	
			<option value="Drama">Drama</option>
			<option value="Infantil">Infantil</option>
		</select><br><br>

		<input type="checkbox" name="compartilhar" checked=""> Você permite que suas respostas sejam compartilhadas com outros usuários? <br><br>

		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_apagar" value="Apagar Dados">

	</form>

</body>
</html>