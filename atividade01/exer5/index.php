<!DOCTYPE html>
<html>
<head>
	<!--Faça um programa em em PHP que calcula os gastos com combustível em uma viagem. O programa deve solicitar ao usuário a distância a ser percorrida em Km, o consumo do carro em Km/litro e o preço do litro do combustível. Como resposta o programa deverá informar qual o valor em R$ a ser gasto com combustível na viagem.!-->
	<title>Gastos Gasolina</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="exer5.php">
		<h3>Calcular os gastos com gasolina</h3><br><br>
		Distância: <input type="text" name="distancia"><br>
		Consumo (Km por lt): <input type="text" name="consumo"><br>
		Preço: <input type="text" name="preco"><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btnLimpar" value="Limpar">
	</form>
</body>
</html>