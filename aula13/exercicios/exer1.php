<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="exer1.php">
		Qual número?<input type="number" name="n" required=""><br><br>
	</form>
	<?php 
		if (isset($_POST['n'])) {
			$n = $_POST['n'];
			for ($i=0; $i <= $n; $i++) { 
				echo "$i ";
			}
		}
	?>
</body>
</html>