<!DOCTYPE html>
<html>
<head>
	<title>Tipos de Dados em PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<h2> Função var_dump</h2>
	<?php 
		$nome = "Guilherme";
		$saldo = 888.37;
		$numeroFilhos = 2;
	?>

	<h3>Tipo da variável nome:</h3>
	<?php 
		var_dump($nome);

	?>
	<h3>Tipo da variável saldo:</h3>
	<?php 
		var_dump($saldo);
		
	?>
	<h3>Tipo da variável número de filhos:</h3>
	<?php 
		var_dump($numeroFilhos);
		
	?>

</body>
</html>