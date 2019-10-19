<!DOCTYPE html>
<html>
<head>
	<title>Exercício 3</title>
</head>
<body>
	<h3>Seja bem vindo <?php echo $_POST['nome']; ?></h3><br><br><br>
	<?php if ($_POST['idade'] < 16) {
		echo "<center>Ainda é muito cedo para você escolher uma profssão. Aproveite o seu tempo para se divertr com a família e amigos. Esperamos você num futuro próximo</center>";
	}
	else {
		$opcoes = ["Matemática","Química","Biologia","Lógica","Saúde"];
		sort($opcoes); ?>
		<form method="POST"	action="processar.php">
		<input type="hidden" name="nome" value="<?php echo $_POST['nome'] ?>">
		<select name="afinidades[]" multiple="" title="Segure CTRL para selecionar mais de uma">
			<option value=""></option>
		<?php foreach ($opcoes as $valor) { ?>
			<option value="<?php echo $valor; ?>"><?php echo $valor; ?></option>
		<?php } ?> <!-- Preencher select sozinho !-->
		<br><input type="submit" name="btn_enviar" value="Enviar">
		</form>
	<?php } ?> <!-- Fim do Else !-->

</body>
</html>