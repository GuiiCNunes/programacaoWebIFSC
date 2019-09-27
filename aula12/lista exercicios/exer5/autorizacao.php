<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
</head>
<body>
	<?php echo "Sr(a) ".$_POST['nome']."<br><br>"; 
		
		if (($_POST['idade']>=16 && $_POST['idade']<=69) && $_POST['peso']>=50 && $_POST['p1']=="sim" && $_POST['p2']=="sim" && $_POST['p3']=="sim" && $_POST['p4']=="nao" && $_POST['p5']=="nao" && $_POST['p6']=="nao") {
			
			echo "Parabéns você está apto a doar sangue!<br>Seguem suas respostas para conferência:<br><br><br> Nome: ".$_POST['nome']."<br>Idade: ".$_POST['idade']."<br>Peso: ".$_POST['peso']." Tipo Sangíneo: ".$_POST['sangue']."<br> Você esta em boas condições de saúde.<br>Você dormiu ao menos 6 horas nas últimas 24 horas<br>Você se alimentou a mais de duas horas<br>Você não está grávida.<br> Você tomou vacina para a gripe a mais de 48 horas.<br>Você não usa drogas<br><br><br><br>Eu, ".$_POST['nome']." Confirmo a veracidade das informações acima.<br><br><br>____________________________________<br>Assinatura<br>";
		} else {
			if ($_POST['idade']<16 && $_POST['idade']>69) {
				echo "Você não pode doar porque esta fora da faixa de idade permitida que é de 16 a 69 anos.<br>";
			}
			if ($_POST['peso']<50) {
				echo "Você não pode doar porque não tem o peso mínimo exigido (50kg).<br>";
			}
			if ($_POST['p1']=="nao") {
				echo "Você não pode doar porque não esta em boas condições de saúde.<br>";
			}
			if ($_POST['p2']=="nao") {
				echo "Você não pode doar porque não dormiu ao menos 6 horas nas ultimas 24 horas.<br>";
			}
			if ($_POST['p3']=="nao") {
				echo "Você não pode doar porque se alimentou a menos de duas horas.<br>";
			}
			if ($_POST['p4']=="sim") {
				echo "Você não pode doar porque está grávida.<br>";
			}
			if ($_POST['p5']=="sim") {
				echo "Você não pode doar porque tomou vacina para a gripe nas ultimas 48 horas.<br>";
			}
			if ($_POST['p6']=="sim") {
				echo "Você não pode doar porque é usuário de drogas.<br>";
			}
		}
	?><br>
	O que deseja fazer?<br>
	<input type="button" name="btn_imprimir" value="Imprimir" onclick="window.print()">
	<input type="button" name="btn_preenchernovamente" value="Preencher novamente o questionário" onclick="location.href='inicio.php'">
	<input type="button" name="btn_voltartermo" value="Voltar para o termo de aceite" onclick="location.href='confirmar.php'">

</body>
</html>