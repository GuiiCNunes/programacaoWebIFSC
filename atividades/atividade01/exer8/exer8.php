<!DOCTYPE html>
<html>
<head>
	<title>Saque</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 	//A) Nº Mínimo de Notas B)Valor do Saque C) Quantidade de nota a ser entregue
			//2, 10, 20 e 50
		$saque = $_POST['saque'];

		$n50 = intdiv($saque,50);
		$resto50 =$saque % 50;
		$n20 = intdiv($resto50,20);
		$resto20 =$resto50 % 20;
		$n10 = intdiv($resto20,10);
		$resto10 =$resto20 % 10;
		$n2 = intdiv($resto10,2);


		echo "O total a ser sacado é de R$ $saque <br>";
		echo "O total de notas recebidas será de ".($n50+$n20+$n10+$n2)." notas <br>";
		echo "Notas | Quantidade <br>";
		echo " 50	|	".$n50."<br>";
		echo " 20	|	".$n20."<br>";
		echo " 10	|	".$n10."<br>";
		echo " 02	|	".$n2;
	?>
	<br><br>
	<input type="button" value="Voltar" onclick="location.href='index.php'">
</body>
</html>