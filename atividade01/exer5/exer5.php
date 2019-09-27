<!DOCTYPE html>
<html>
<head>
	<title>Segundos passados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php //Faça um programa em em PHP que calcula os gastos com combustível em uma viagem. O programa deve solicitar ao usuário a distância a ser percorrida em Km, o consumo do carro em Km/litro e o preço do litro do combustível. Como resposta o programa deverá informar qual o valor em R$ a ser gasto com combustível na viagem.

		$distancia = $_POST['distancia'];
		$consumo = $_POST['consumo'];
		$preco = $_POST['preco'];

		echo "Em uma distancia de $distancia km, com um consumo de $consumo km/lt e o preço da gasolina a R$ ". number_format($preco,3,",",".")." o valor gasto em gasolina é de R$ ". number_format(round(($distancia/$consumo*$preco),2), 2 , ",",".");
	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>