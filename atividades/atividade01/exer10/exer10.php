<!DOCTYPE html>
<html>
<head>
	<title>Calculo de Salário</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$rg = $_POST['rg'];
		$tel = $_POST['tel'];
		$endereco = $_POST['endereco'];
		$datanasc = $_POST['datanasc'];
		$salbruto = $_POST['salbruto'];
		$dependentes = $_POST['dependentes'];
		$valeref = 300;
		$valetrans = 120;
		$auxesc = $dependentes*200.00;
		$auxsaude = $dependentes*250.00;
		$valorTotal = ($salbruto*0.9) + $valeref + $valetrans + $auxsaude + $auxesc;
		//O programa deve Apresentar na tela todas as informações acima
		echo "Nome: $nome <br> CPF: $cpf <br> RG: $rg <br> Telefone: $tel <br> Endereço: $endereco <br> Data de Nascimento: $datanasc <br> Salário Bruto: ".number_format($salbruto,2,",",".")." <br> Dependentes: $dependentes <br>";
		//Salário Líquido: Deve ser descontado para fins de imposto de renda 10% do salário bruto
		echo "Desconto Imposto de Renda: R$ ".number_format(($salbruto*0.1),2,",",".")."<br>";
		//Deverá ser apresentado ao usuário seu salário líquido;
		echo "Salário Líquido: R$ ".number_format(($salbruto*0.9),2,",",".")."<br>";
		// Deverá ser apresentado o valor do vale-alimentação ao qual ele tem direito no valor de R$ 300,00
		echo "Vale-alimentação: R$ ".number_format($valeref,2,",",".")."<br>";
		//Deverá ser apresentado o valor do vale-transporte ao qual ele tem direito no de R$ 120,00
		echo "Vale-transporte: R$ ".number_format($valetrans,2,",",".")."<br>";
		//Para cada dependente ele receberá um auxílio de R$ 200,00 para auxiliar no pagamento da escola
		echo "Auxílio Escola: R$ ".number_format($auxesc,2,",",".")."<br>";
		//Para cada dependente ele receberá um auxílio de R$ 250,00 para auxiliar no pagamento do plano de saúde
		echo "Auxílio plano de saúde: R$ ".number_format($auxsaude,2,",",".")."<br>";
		//Apresentar ao final o Valor Total do Salário com o desconto do imposto e o acréscimo dos benefícios acima mencionados
		echo "Valor Total Salário: R$ ".number_format($valorTotal,2,",",".")."<br>";
	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>