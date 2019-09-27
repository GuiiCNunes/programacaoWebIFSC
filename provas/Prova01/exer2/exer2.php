<!DOCTYPE html>
<html>
<head>
	<title>Cozimento</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		//3 Entradas
		$horaini = $_POST['horaini'];
		$minutoini = $_POST['minutoini'];
		$desejado = $_POST['desejado'];

		//Processos
		$horafim = intdiv(($desejado + $minutoini), 60) + $horaini;
		$minutofim = ($desejado + $minutoini)%60;

		//Saida

		echo "Iniciado as $horaini : $minutoini , com tempo ideal de $desejado minutos, o cozimento deve ser encerrado as $horafim : $minutofim .";

		/*PLUS
		$diafim = intdiv($horafim, 24); //passar de um dia cozinhando
		if ($diafim>0) {
			$horafim-=24;
		}
		if ($horaini>8 and $horaini<19) {	//ver se estará aberta	
			if ($horafim>=19) {
				echo "Não dará tempo de cozimento até o final do expediente.";
			}
			else {
				if ($minutofim<=9) { //colocar o zero a esquerda
					echo "Iniciado as $horaini : $minutoini , com tempo ideal de $desejado minutos, o cozimento deve ser encerrado as $horafim : 0$minutofim .";
				}
				else {
				echo "Iniciado as $horaini : $minutoini , com tempo ideal de $desejado minutos, o cozimento deve ser encerrado as $horafim : $minutofim .";
				}
			}
		}
		else {
			echo "A cantina ainda não esta funcionando.";
		}

		PLUS*/
	?><br><br>
	<input type="button" name="btnVoltar" value="Voltar" onclick="location.href='index.php'">
</body>
</html>