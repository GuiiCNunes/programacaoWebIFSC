<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 3 Strings</title>
	<meta charset="utf-8">
</head>
<body>
	<h2> Como limpar Strings - Eliminar espaços vazios</h2>
	<?php  
		$email = "      guiicnunes@gmail.com";
		$email2 = "      guii  cnu  n es@g  ma  i l.com";
		$site = "http://www.ifsc.edu.br";
	?>

	<h4>E-mail:</h4>
	<?php echo trim($email); //Espaços no inicio ou no fim, no interior pode usar a str_replace?>

	<h4>Site:</h4>
	<a href=" <?php echo $site ?> "><?php echo trim($site,'http://') ?></a>

	<h4>Eliminando todos os espaços</h4>
	<?php echo str_replace(" ", "", $email2) //Primeiro paramero é o que busca, segundo é o que quer substituir, terceiro é onde procurar/string a ser manipulada?>
</body>
</html>