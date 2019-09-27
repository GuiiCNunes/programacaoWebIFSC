<!DOCTYPE html>
<html>
<head>
	<title>Empresa de vendas</title>
	<meta charset="utf-8">
	<!-- 3 CORRETORES; salário fixo de 1000;+7% total de vendas; Mostrar saida com 2 casas após a virgula (padrão: 1.785,00)
		entrada: Nome corretor; CPF ; Total de vendas no mês
		saida: Nome; total de vendas; valor da comissão; salário final
	!-->
</head>
<body>
	<form method="POST" action="exer1.php">
		<fieldset>
			<h3>Dados do primeiro corretor:</h3><br><br>
			Nome:<input type="text" name="nome1" required=""><br>
			CPF: <input type="text" name="cpf1" required=""><br>
			Total de vendas no mês: <input type="text" name="vendas1" required=""><br>
		</fieldset><fieldset>
			<h3>Dados do segundo corretor:</h3><br><br>
			Nome:<input type="text" name="nome2" required=""><br>
			CPF: <input type="text" name="cpf2" required=""><br>
			Total de vendas no mês: <input type="text" name="vendas2" required=""><br>
		</fieldset><fieldset>
			<h3>Dados do terceiro corretor:</h3><br><br>
			Nome:<input type="text" name="nome3" required=""><br>
			CPF: <input type="text" name="cpf3" required=""><br>
			Total de vendas no mês: <input type="text" name="vendas3" required=""><br>
		</fieldset>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btnLimpar" value="Limpar">
	</form>
</body>
</html>