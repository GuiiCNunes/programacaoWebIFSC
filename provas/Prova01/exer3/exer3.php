<!DOCTYPE html>
<html>
<head>
	<title>Formas de pagamento</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		//Dados dos pais entrada
		$pai = $_POST['pai'];
		$mae = $_POST['mae'];
		//Dados da criança entrada
		$crianca = $_POST['crianca'];
		$datanasc = $_POST['datanasc'];
		//Dados do resposável entrada
		$financeiro = $_POST['financeiro'];
		$cpf = $_POST['cpf'];
		$renda = $_POST['renda'];
		//Entrada de valores
		$infantil = 13000;
		$fundamental = 17000;
		//Saidas de dados:
		echo "<form><fieldset><h3>Dados dos pais</h3><br>
				Pai: $pai <br>
				Mãe: $mae <br> </fieldset><fieldset>
				<h3>Dados da criança</h3><br>
				Nome: $crianca <br>
				Data de nascimento: $datanasc <br></fieldset><fieldset>
				<h3>Dados do responsável financeiro</h3><br>
				Responsável financeiro: $financeiro <br>
				CPF: $cpf <br>
				Renda: R$ ".number_format($renda,2,",",".")
				."</fieldset></form><br>";
		//Saida forma de pagamento:
		echo "<form><h2>Formas de Pagamento</h2><br><fieldset>
				<h3>Mensalidade Educação Infantil:</h3><br>
				Valor da anuidade: R$ ".number_format($infantil,2,",",".")."<br>
				Anuidade no dinheiro a vista: R$ ".number_format(($infantil*0.9),2,",",".")."<br>
				Anuidade uma vez no cartão: R$ ".number_format(($infantil*0.95),2,",",".")."<br>
				Anuidade em 12 parcelas de: R$ ".number_format(($infantil/12),2,",",".")."
				<br></fieldset><fieldset>
				<h3>Mensalidade da Educação Fundamental</h3><br>
				Valor da anuidade: R$ ".number_format($fundamental,2,",",".")."<br>
				Anuidade no dinheiro a vista: R$ ".number_format(($fundamental*0.85),2,",",".")."<br>
				Anuidade uma vez no cartão: R$ ".number_format(($fundamental*0.925),2,",",".")."<br>
				Anuidade em 12 parcelas de: R$ ".number_format(($fundamental/12),2,",",".")."
		</fieldset></form>";
	?>
	<input type="button" name="btnVoltar" value="Voltar" onclick="location.href='index.php'">
</body>
</html>