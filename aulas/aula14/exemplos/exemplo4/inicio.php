<!DOCTYPE html>
<html>
<head>
	<title>Exemplo Select</title>
</head>
<body>
	<form method="POST" action="select.php">
		<b>Qual é o seu procesador?</b>
		<select name="processador">
			<option value=""></option>
			<option value="Pentium"> Pentium </option>
			<option value="AMD"> AMD </option>
			<option value="Celeron"> Celeron </option>
		</select>
		<br><br>
		<b>Livro(s) que você deseja comprar?</b>
		<select name="livros[]" multiple="" title="Utilize a tecla CTRL para selecionar mais de uma opção">
			<option value="Biblia do PHP 4"> Biblia do PHP 4 </option>
			<option value="PHP Profissional"> PHP Profissional </option>
			<option value="Iniciando em php"> Iniciando em php </option>
			<option value="Novidades do Php 5"> Novidades do Php 5 </option>
			<option value="Biblia do MySQL"> Biblia do MySQL </option>
		</select><br><br>
		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_apagar" value="Apagar Dados">
	</form>
</body>
</html>