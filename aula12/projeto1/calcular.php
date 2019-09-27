<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$nome = $_POST['nome'];
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		$calculo = $_POST['calculo'];

		echo "<h3>Olá $nome!</h3><br>Os números escolhidos foram: $n1 e $n2.<br>";
		if ($calculo=="soma") {
			echo "A operação escolhida foi: Soma.<br>O resultado final é: ".($n1+$n2);
		}
		else {
			if ($calculo=="subtracao") {
				echo "A operação escolhida foi: Subtração.<br>O resultado final é: ".($n1-$n2);
			}
			else {
				if ($calculo=="divisao") {
					echo "A operação escolhida foi: Divisão.<br>O resultado final é: ".($n1/$n2);
				}
				else {
					echo "A operação escolhida foi: Multiplicação.<br>O resultado final é: ".($n1*$n2);
				}
			}
		}
	?>
	<br><br>
	<input type="button" name="btnVoltar" value="Voltar" onclick="location.href='index.php'">
</body>
</html>