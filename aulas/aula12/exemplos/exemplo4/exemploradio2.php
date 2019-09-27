<?php 
	$sistema = $_POST['sistema'];
	$monitor = $_POST['monitor'];
	$cont = 0;
	if ($sistema == "Linux")
	{
		$cont++;
	}
	if ($monitor == "LG")
	{
		$cont++;
	}
	echo "O sistema operacional escolhido foi: $sistema. Já o monitor escolhido foi: $monitor<br>";

	echo "Você fez $cont pontos.<br>";
	if($cont==2)
	{
		echo "Parabens, você acertou as duas";
	}
	else
	{
		if($cont == 1)
		{
			echo "Você acertou uma questão";
		}
		else{
			echo "Você não acertou nenhuma";
		}
	}
?>