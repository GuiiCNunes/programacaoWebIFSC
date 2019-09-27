<?php 
	// Trabalhando com funções para arrays
	
	echo "Encontrando o tamanho de um vetor<br>";
	$estado[]="Rio Grande do Sul";
	$estado[]="Paraná";
	$estado[]="Santa Catarina";
	$estado[]="São Paulo";

	$tamanho = count($estado);
	echo "Tamanho do Vetor é: $tamanho";

	echo "<br><br> Procurando um elemento no vetor<br>";
	$existe = in_array("Santa Catarina", $estado);
	if ($existe == true) {
		echo "O elemento foi encontrado no array<br>";
	}
	else{
		echo "Elemento não foi encontrado no array";
	}

	echo "<br><br> Retornando a posição onde o elemento esta armazenado <br>";
	$indice = array_search("Santa Catarina", $estado);
	if ($indice!=null) {		
		echo "Elemento esta armazenado na posição: $indice<br>";
	}
	else {
		echo "Elemento não encontrado no vetor <br>";
	}

	echo "<br><br>Excluindo elemento do vetor<br>";
	$estado1[]="Rio Grande do Sul";
	$estado1[]="Paraná";
	$estado1[]="Santa Catarina";
	$estado1[]="São Paulo";
	echo "Vetor Original:<br>";
	echo "<pre>";
	print_r($estado1);
	echo "</pre>";
	unset($estado1[3]);
	echo "Vetor após exclusão do indice 3<br>";
	echo "<pre>";
	print_r($estado1);
	echo "</pre>";

	echo "<br><br>Excluindo elemento do vetor<br>";
	$estado2[]="Rio Grande do Sul";
	$estado2[]="Paraná";
	$estado2[]="Santa Catarina";
	$estado2[]="São Paulo";
	echo "Vetor Original:<br>";
	echo "<pre>";
	print_r($estado2);
	echo "</pre>";
	unset($estado2);
	echo "Vetor após exclusão do vetor<br>";
	// Apos excluir vai mostrar um erro por não ter mais a variável, se eu só pedir para mostrar, tratando o erro:
	if (empty($estado2)) {
		echo "Vetor Inexistente";
	}
	else{
		echo "<pre>";
		print_r($estado2);
		echo "</pre>";
	}

	echo "<br><br> Recuperando maior e menor valor do vetor<br>";
	$estado3[]=34;
	$estado3[]=2;
	$estado3[]=38;
	$estado3[]=22;

	$maior = max($estado3); 
	$menor = min($estado3);

	echo "Maior valor do vetor é: $maior<br>";
	echo "Menor valor do vetor é: $menor<br>";

	echo "<br><br>Invertendo um vetor<br>";
	$estado4[]="Rio Grande do Sul";
	$estado4[]="Paraná";
	$estado4[]="Santa Catarina";
	$estado4[]="São Paulo";
	echo "Vetor Original:<br>";
	echo "<pre>";
	print_r($estado4);
	echo "</pre>";

	$invertido = array_reverse($estado4);
	echo "Vetor Invertido:<br>";
	echo "<pre>";
	print_r($invertido);
	echo "</pre>";

	echo "<br><br> Criando vetor a partir de uma string - função explode <br>";
	$nomes = "jose-maria-joão";
	echo "String original: $nomes<br>";
	$vetnomes = explode("-", $nomes);
	echo "Vetor Gerado:<br>";
	echo "<pre>";
	print_r($vetnomes);
	echo "</pre>";

	echo "<br><br> Criando uma string a partir de um vetor - função implode <br>";
	$estado5[]="Rio Grande do Sul";
	$estado5[]="Paraná";
	$estado5[]="Santa Catarina";
	$estado5[]="São Paulo";
	echo "Vetor Original:<br>";
	echo "<pre>";
	print_r($estado5);
	echo "</pre>";

	$estados = implode(", ", $estado5);
	echo "String gerada:<br>";
	echo "$estados<br>";
?>