<?php 
	$n1 = $_POST['n1'];
	echo "<h2>Utilizando formatação de números reais</h2><br><br>";
	echo "O número digitado foi: $n1 <br>";
	echo "O número digitado com três casas decimais é: ".number_format($n1,3)."<br>";
	echo "O número digitado com três casas decimais e separador de milhar é: ".number_format($n1, 3 , "," , ".")."<br>";
?>