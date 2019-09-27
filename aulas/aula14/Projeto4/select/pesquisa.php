<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
	<h2>Sr(a) <?php echo $_POST['nome']; ?></h2><br><br>
	<?php 
	if (isset($_POST['musica'])) {
		echo "<h2>Preferências musicais:</h2>";
		foreach ($_POST['musica'] as $musica) {
			echo "<h3>- ".$musica."</h3>";
		}
		if (isset($_POST['compartilhar'])) {
			echo "<h3>Obrigado por compartilhar suas músicas!</h3>";
		}
		else {
			echo "<h3> Você não terá suas preferências musicais compartilhadas!</h3>";
		}
	}
	else {
		echo "<h3>Você não marcou nenhum gênero musical!</h3>";
		if (isset($_POST['compartilhar'])) {
			echo "Você não pode compartilhar porque não marcou nada.";
		}
	}
	if (isset($_POST['filme'])) {
		echo "<h2>Preferências filmes:</h2>";
		foreach ($_POST['filme'] as $filme) {
			echo "<h3>- ".$filme."</h3>";
		}
		if (isset($_POST['compartilhar'])) {
			echo "<h3>Obrigado por compartilhar seus filmes!</h3>";
		}
		else {
			echo "<h3> Você não terá suas preferências de filmes compartilhadas!</h3>";
		}
	}
	else {
		echo "<h3>Você não marcou nenhum gênero de filme!</h3>";
		if (isset($_POST['compartilhar'])) {
			echo "Você não pode compartilhar porque não marcou nada.";
		}
	}
?><br>
<input type="button" name="btn_voltar" value="Voltar" onclick="location.href='index.php'">
</body>
</html>