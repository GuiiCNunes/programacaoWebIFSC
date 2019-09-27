<!DOCTYPE html>
<html>
<head>
	<!-- 
	Faça um programa em PHP onde o usuário terá que informar os seguintes dados:
• Nome completo
• CPF
• RG
• Telefone (com DDD)
• Endereço
• Data de Nascimento
• Salário Bruto
• Quantidade de dependentes

O programa deve Apresentar na tela todas as informações acima e também calcular e mostrar:
• Salário Líquido: Deve ser descontado para fins de imposto de renda 10% do salário bruto;
• Deverá ser apresentado ao usuário seu salário líquido;
• Deverá ser apresentado o valor do vale-alimentação ao qual ele tem direito no valor de R$
300,00;
• Deverá ser apresentado o valor do vale-transporte ao qual ele tem direito no de R$ 120,00;
• Para cada dependente ele receberá um auxílio de R$ 200,00 para auxiliar no pagamento
da escola;
• Para cada dependente ele receberá um auxílio de R$ 250,00 para auxiliar no pagamento
do plano de saúde;
• Apresentar ao final o Valor Total do Salário com o desconto do imposto e o acréscimo dos
benefícios acima mencionados.
		!-->
	<title>Dados Usuário</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="exer10.php">
		<h3>Dados do Usuário</h3><br><br>
		Nome Completo: 				<input type="text" name="nome"><br>
		CPF: 						<input type="text" name="cpf"><br>
		RG:							<input type="text" name="rg"><br>
		Telefone(com DDD):			<input type="text" name="tel"><br>
		Endereço:					<input type="text" name="endereco"><br>
		Data Nascimento:			<input type="text" name="datanasc"><br>
		Salário Bruto:				<input type="text" name="salbruto"><br>
		Dependentes:				<input type="number" name="dependentes"><br><br><br>
		<input type="submit" name="btnEnviar" value="Enviar">
		<input type="reset" name="btnLimpar" value="Limpar">
	</form>
</body>
</html>