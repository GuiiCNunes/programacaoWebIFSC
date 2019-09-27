<!DOCTYPE html>
<html>
<head>
	<!--Suponha que um caixa eletrônico disponha apenas de notas de 2, 10, 20 e 50 reais.
Considerando que o cliente está querendo fazer um saque de um valor qualquer (considere esse
valor inteiro). Faça um programa em PHP que mostre o número mínimo de notas que o caixa
deve fornecer para o cliente. Mostre também, o valor do saque, e a quantidade de cada nota a ser
entregue. Obs: O caixa não trabalha com moedas. Mostrar todos os valores com três casas
decimais!-->
	<title>Caixa Eletrônico</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="exer8.php">
		<h3>Caixa Eletrônico</h3><br><br>
		Saque: <input type="number" name="saque"><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btnLimpar" value="Limpar">
	</form>
</body>
</html>