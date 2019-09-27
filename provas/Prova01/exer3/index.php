<!DOCTYPE html>
<html>
<head>
	<title>Escola da Tia Lu</title>
	<meta charset="utf-8">
	<!-- Entradas:
			1)Nome do pai
			2)Nome da mãe
			3)Nome da criança
			4)Data de NAscimento da criança
			5)Nome do Responsável financeiro
			6)CPF do responsável financeiro
			7)Informar a renda do responsável financeiro
		Apresentar:
			Dados dos Pais
			Dados da Criança
			Dados do responsável financeiro
		Formas de pagamento
			Mensalidade Educação Infatil
				Anuidade: 13.000,00
				A vista no dinehrio: -10%
				1x no cartão: -5%
				12x: 100% (mostrar as parcelas)
			Mensalidade Educação Fudamental
				Anuidade: 17.000,00
				A vista no dinheiro: -15%
				1x no cartão: -7,5%
				12x : 100% (parcelas);
	!-->
</head>
<body>
	<form method="POST" action="exer3.php">
		<fieldset>
			<h2>Dados dos pais</h2><br>
			Nome do pai: <input type="text" name="pai" required=""><br>
			Nome da mãe: <input type="text" name="mae" required=""><br><br>
		</fieldset>
		<fieldset>
			<h2>Dados da criança</h2><br>
			Nome da criança: <input type="text" name="crianca" required=""><br>
			Data de nascimento:<input type="text" name="datanasc" required=""><br><br>
		</fieldset>
		<fieldset>
			<h2>Dados do responsável financeiro</h2><br>
			Nome do responsável financeiro: <input type="text" name="financeiro" required=""><br>
			CPF do responsável financeiro: <input type="text" name="cpf" required=""><br>
			Renda: <input type="text" name="renda" required=""><br><br>
		</fieldset>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btnLimpar" value="Limpar">
	</form>
</body>
</html>