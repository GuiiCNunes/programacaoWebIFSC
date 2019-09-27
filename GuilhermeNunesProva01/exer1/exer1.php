<!DOCTYPE html>
<html>
<head>
	<title>Calculo do salário</title>
	<meta charset="utf-8">
	<!-- 3 CORRETORES; salário fixo de 1000;+7% total de vendas; Mostrar saida com 2 casas após a virgula (padrão: 1.785,00)
		entrada: Nome corretor; CPF ; Total de vendas no mês
		saida: Nome; total de vendas; valor da comissão; salário final
	!-->
</head>
<body>
	<?php 
		//1º corretor entrada
		$nome1 = $_POST['nome1'];
		$cpf1 = $_POST['cpf1'];
		$vendas1 = $_POST['vendas1'];
		//2º corretor entrada
		$nome2 = $_POST['nome2'];
		$cpf2 = $_POST['cpf2'];
		$vendas2 = $_POST['vendas2'];
		//3º corretor entrada
		$nome3 = $_POST['nome3'];
		$cpf3 = $_POST['cpf3'];
		$vendas3 = $_POST['vendas3'];
		//1º corretor processo
		$comissao1 = $vendas1 * 0.07;
		$salario1 = $vendas1 + $comissao1 + 1000;
		//2º corretor processo
		$comissao2 = $vendas2 * 0.07;
		$salario2 = $vendas2 + $comissao2 + 1000;
		//3º corretor processo
		$comissao3 = $vendas3 * 0.07;
		$salario3 = $vendas3 + $comissao3 + 1000;
		//1º corretor saida
		echo "<h2>1º Corretor</h2><br><br>O corretor $nome1 ($cpf1) fez um total de R$ ".number_format($vendas1,2,",",".")." em vendas no mês.<br> Tendo uma comissão de R$ ".number_format($comissao1,2,",",".").". <br> Ficando com um salário final de R$ ".number_format($salario1,2,",",".").". <br><br><br>";
		//2º corretor saida
		echo "<h2>2º Corretor</h2><br><br>O corretor $nome2 ($cpf2) fez um total de R$ ".number_format($vendas2,2,",",".")." em vendas no mês.<br> Tendo uma comissão de R$ ".number_format($comissao2,2,",",".").". <br> Ficando com um salário final de R$ ".number_format($salario2,2,",",".").". <br><br><br>";
		//3º corretor saida
		echo "<h2>3º Corretor</h2><br><br>O corretor $nome3 ($cpf3) fez um total de R$ ".number_format($vendas3,2,",",".")." em vendas no mês.<br> Tendo uma comissão de R$ ".number_format($comissao3,2,",",".").". <br> Ficando com um salário final de R$ ".number_format($salario3,2,",",".").". <br><br><br>";
	?>
	<input type="button" name="btnVoltar" value="Voltar" onclick="location.href='index.php'">
</body>
</html>