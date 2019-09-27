<!DOCTYPE html>
<html>
<head>
	<title>Resultado Criptografico</title>
</head>
<body>
	<?php 
		$frase = $_POST['frase'];
		$casas = $_POST['casas'];
		$i1 = "go";
		$criptografia[0] = '"';

		for ($i=1; $i1 == "go" ; $i++) { 
			if (ord($frase[$i])==34) {
				$criptografia[$i]=chr(ord($frase[$i]));
				$i1="stop";
			}
			else if (ord($frase[$i])>=97 && ord($frase[$i])<=122) {
				//$criptografia[$i]= chr((ord($frase[$i])-$casas)); 
				$resultado = ord($frase[$i])-$casas; //Fazendo o loop do 97~122
				if($resultado<97){
					$criptografia[$i]= chr(122 - (97 - ($resultado + 1)));
				}
				else {
					$criptografia[$i]= chr((ord($frase[$i])-$casas));
				}
			} 
			else {
				$criptografia[$i]= chr(ord($frase[$i]));
			}
		}

		echo "A frase é: $frase , descriptografada ($casas casas), ficaria como: <br>";
		
		for ($x=0; $x<$i;$x++) { 
			echo $criptografia[$x];
		}
	?>
	<br><br><br>
	<input type="button" name="btn_Voltar" value="Voltar" onclick="location.href='index.php'">
</body>
</html>