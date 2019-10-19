<?php 
	function somaultimos($n1,$n2,$n3,$n4,$n5) {
		$numeros = ["$n1","$n2","$n3","$n4","$n5"];
		sort($numeros);

		return ($numeros[4] + $numeros[3]);
	}

	function contapares($n1,$n2,$n3,$n4,$n5){
		$numeros = ["$n1","$n2","$n3","$n4","$n5"];		
		$par = 0;

		for ($i=0; $i < 5; $i++) { 
			if ($numeros[$i] % 2 == 0) {
				$par++;
			}
		}
		return $par;
	}

	function contaimpares($n1,$n2,$n3,$n4,$n5){
		$numeros = ["$n1","$n2","$n3","$n4","$n5"];		
		$impar = 0;

		for ($i=0; $i < 5; $i++) { 
			if ($numeros[$i] % 2 != 0) {
				$impar++;
			}
		}
		return $impar;
	}

	function domeio($n1,$n2,$n3,$n4,$n5) {
		$numeros = ["$n1","$n2","$n3","$n4","$n5"];
		sort($numeros);
		return $numeros[2];
	}
?>