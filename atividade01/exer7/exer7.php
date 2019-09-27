<!DOCTYPE html>
<html>
<head>
	<title>Distância</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$x1 = $_POST['x1'];
		$x2 = $_POST['x2'];
		$y1 = $_POST['y1'];
		$y2 = $_POST['y2'];

		echo "A distância entre o ponto P($x1,$y1) e P($x2,$y2) é ".sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>