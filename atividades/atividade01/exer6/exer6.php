<!DOCTYPE html>
<html>
<head>
	<title>Conversor idade</title>
	<meta charset="utf-8">
	<!--a) a idade dessa pessoa em anos;
		b) a idade dessa pessoa em meses;
		c) a idade dessa pessoa em dias;
		d) a idade dessa pessoa em semanas.!-->
</head>
<body>
	<h3>Conversor de idade:</h3><br><br>
	<?php 
		$nasc = $_POST['nasc'];
		$atual = $_POST['atual'];

		echo "Uma pessoa que nasceu em $nasc em $atual tem: <br> A)Anos: ".($atual-$nasc)."<br>B)Meses: ".(($atual-$nasc)*12)."<br>C)Dias: ". ((($atual-$nasc)*12)*30)."<br>D)Semanas: ".((($atual-$nasc)*12)*4);
	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>