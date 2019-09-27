<?php 
	$dividendo = $_POST['n1'];
	$divisor = $_POST['n2'];

	$divisaoreal = $dividendo/$divisor;
	$resto = $dividendo%$divisor;
	$quociente = intdiv( $dividendo, $divisor);

	echo "A divisão real entre os números $dividendo e $divisor é: $divisaoreal <br> <br>";
	echo "A resto real entre os números $dividendo e $divisor é: $resto <br> <br>";
	echo "O quociente inteiro da divisão entre os números $dividendo e $divisor é: $quociente <br> <br>";
?>