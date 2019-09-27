<!DOCTYPE html>
<html>
<head>
	<title>Projeto 2</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	$inicial = $_POST['inicial'];
	$final = $_POST['final'];
	echo "O valor inicial: $inicial e o valor final: $final <br><br> Intervalo Gerado <br><br>";
	for ($i=$inicial; $i<=$final ; $i++) { 
		echo "$i <br>";
	}
	?>
	<br>
	<input type="button" name="btn_voltar" value="Voltar" onclick="location.href='inicio.php'">
</body>
</html>