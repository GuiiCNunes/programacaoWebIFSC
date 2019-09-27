<!DOCTYPE html>
<html>
<head>
	<title>Exercícios aula 07</title>
	<meta charset="utf-8">
	<!--
	1. Faça um programa em php que mostre a soma de três numeros. x
    2. Faça um programa em php que mostre a multiplicação de três números. x
    3. Faça um programa em php que mostre a subtracão de três números.  x
    4. Faça um programa em php que mostre a divisão de três números.  x
    5. Faça um programa em php que mostre a media aritmética entre dois números. x
    6. Faça um programa em php que mostre na tela o nome, idade, endereço e e-mail do aluno. x
    7. Faça um programa em php que resolva seguinte formula: imposto = salario * 0.2. x
    8. Faça um programa em php que mostre as quatro operações básicas realizadas com dois números inteiros. 
    !-->
</head>
<body>
	<form method="GET" action="somar.php">
		<h3>Mostrar soma de três valores:</h3><br><br>
		Digite o primeiro número: <input type="text" name="n1"><br>
		Digite o segundo número: <input type="text" name="n2"><br>
		Digite o terceiro número: <input type="text" name="n3"><br><br>
		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">
	</form><br><br><br>
	<form method="GET" action="multiplicacao.php">
		<h3>Mostrar a Multiplicação de três valores:</h3><br><br>
		Digite o primeiro número: <input type="text" name="n1"><br>
		Digite o segundo número: <input type="text" name="n2"><br>
		Digite o terceiro número: <input type="text" name="n3"><br><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">		
	</form>
	<form method="GET" action="subtracao.php">
		<h3>Mostrar a Subtração de três valores:</h3><br><br>
		Digite o primeiro número: <input type="text" name="n1"><br>
		Digite o segundo número: <input type="text" name="n2"><br>
		Digite o terceiro número: <input type="text" name="n3"><br><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">
	</form>
	<form method="GET" action="divisao.php">
		<h3>Mostrar a Divisão de três valores:</h3><br><br>
		Digite o primeiro número: <input type="text" name="n1"><br>
		Digite o segundo número: <input type="text" name="n2"><br>
		Digite o terceiro número: <input type="text" name="n3"><br><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">
	</form>
	<form method="GET" action="media.php">
		<h3>Mostrar a média de dois valores:</h3><br><br>
		Digite o primeiro número: <input type="text" name="n1"><br>
		Digite o segundo número: <input type="text" name="n2"><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">
	</form>
	<form method="GET" action="usuario.php">
		<h3>Dados do Usuário</h3><br><br>
		Nome: <input type="text" name="nome"><br>
		Idade: <input type="text" name="idade"><br>
		Endereço: <input type="text" name="endereco"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">
	</form>
	<form method="GET" action="imposto.php">
		<h3>Calculo de Imposto</h3><br><br>
		Salário: <input type="text" name="salario">
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">	
	</form>
	<form method="GET" action="calculadora.php">
		<h3>Calculadora de dois números</h3><br><br>
		Digite o primeiro número: <input type="text" name="n1"><br>
		Digite o segundo número: <input type="text" name="n2"><br><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Limpar">
	</form>
</body>
</html>