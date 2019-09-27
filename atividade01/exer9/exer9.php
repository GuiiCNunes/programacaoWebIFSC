<!DOCTYPE html>
<html>
<head>
	<title>Dados</title>
	<meta charset="utf-8">
	<!-- O programa deverá mostrar todas as opções de compra do produto com as seguintes condições:
• A vista → 20% de desconto
• No cartão em uma vez → 10% de desconto
• No cartão em duas vezes → Preço da etiqueta
• No cartão em três vezes → 5% de acréscimo
• No cartão em quatro vezes → 10% de acréscimo
• No cartão em cinco vezes → 15% de acréscimo
Mostrar todos os valores com duas casas decimais !-->
</head>
<body>
	<?php 
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$produto = $_POST['produto'];
		$avista = $produto*0.8;
		$x1 = $produto*0.9;
		$x2 = $produto;
		$x3 = $produto*1.05;
		$x4 = $produto*1.10;
		$x5 = $produto*1.15;

		echo "$nome , portador do $cpf , possui essas opções de compra: <br> A vista: ".number_format($avista,2,",",".")." <br> Uma vez no cartão: ".number_format($x1,2,",",".")." <br> Duas vezes: ".number_format($x2,2,",",".")." <br> Três vezes: ".number_format($x3,2,",",".")." <br> Quatro vezes: ".number_format($x4,2,",",".")." <br> Cinco vezes: ".number_format($x5,2,",",".")." <br>";

	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>