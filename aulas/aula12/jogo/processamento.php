<!DOCTYPE html>
<html>
<head>
	<title>Resultado Final</title>
</head>
<body>
	<b><h1>Olá <?php echo $_POST['nome']; ?></h1></b>

	<?php 
	$acertos=0;
	//Lógica para verificar quantidade de acertos
	echo "Suas respostas: <br><br>";
	if($_POST['p1'] == 10) {
		echo "Questão 1: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 1: Incorreta <br>";
	}
	if($_POST['p2'] == 9) {
		echo "Questão 2: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 2: Incorreta <br>";
	}
	if($_POST['p3'] == "segundo") {
		echo "Questão 3: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 3: Incorreta <br>";
	}
	if($_POST['p4'] == "maria") {
		echo "Questão 4: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 4: Incorreta <br>";
	}
	if($_POST['p5'] == 20) {
		echo "Questão 5: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 5: Incorreta <br>";
	}
	if($_POST['p6'] == 4) {
		echo "Questão 6: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 6: Incorreta <br>";
	}
	if($_POST['p7'] == 3) {
		echo "Questão 7: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 7: Incorreta <br>";
	}
	if($_POST['p8'] == 12) {
		echo "Questão 8: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 8: Incorreta <br>";
	}
	if($_POST['p9'] == 12) {
		echo "Questão 9: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 9: Incorreta <br>";
	}
	if($_POST['p10'] == 9) {
		echo "Questão 10: Correta <br>";
		$acertos++;
	}
	else{
		echo "Questão 10: Incorreta <br>";
	}

	echo "Número de questões corretas: $acertos <br><br>";
	echo "Total de pontos: ".($acertos*10)."<br><br>";
	if ($acertos == 10) {
		echo "Parabens, você acertou todas as questões.";
	}
	else{
		echo "Você não acetrtou todas as questões, tente novamente.";
	}
	?>
	<br><br>
	<input type="button" name="btn_imprimir" value="Imprimir resultado" onclick="window.print()">
	<input type="button" name="btn_jogarnovamente" value="Jogar Novamente" onclick="location.href='dados.php'">
	<input type="button" name="btn_preencher" value="Preencher Dados" onclick="location.href='inicio.php'">
	<input type="button" name="btn_telaconfirmar" value="Ir para tela de confirmar" onclick="location.href='confirmar.php'">
</body>
</html>