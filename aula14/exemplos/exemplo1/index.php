<?php 

	echo "Trabalhando com Arrays - indices <br>";
	$estado[0] = "RS"; 
	$estado[1] = "SC"; 
	$estado[2] = "PR"; 
	$estado[3] = "SP";
	//Formatar o html
	echo "<pre>";
	//Mostrar informações de um array
	print_r($estado);
	echo "</pre>";

	echo "<br><br>Trabalhando com arrays - indices alternados<br><br>";
	$estado1[0] = "RS";
	$estado1[1] = "SC";
	$estado1[3] = "PR";
	$estado1[7] = "SP";
	echo "<pre>";
	print_r($estado1);
	echo "</pre>";

	echo "<br><br> Trabalhando com arrays associativos<br>";
	$estado2["rs"] = "Rio Grande do Sul";
	$estado2["sc"] = "Santa Catarina";
	$estado2["pr"] = "Paraná";
	echo "<pre>";
	print_r($estado2);
	echo "</pre>";

	echo "<br><br> Trabalhando com arrays associativos de forma alternativa - inicializando vetor de uma vez só <br>";
	$estado3 = ["rs" => "Rio Grande do Sul", "sc" => "Santa Catarina", "pr" => "Paraná"];
	echo "<pre>";
	print_r($estado3);
	echo "</pre>";

	echo "<br><br> Trabalhando com arrays sem especificar a posição (indice ou associativo) através do uso de colchetes <br>";
	$estado4[] = "Rio Grande do Sul";
	$estado4[] = "Santa Catarina";
	$estado4[] = "Paraná";
	$estado4[] = "São Paulo";
	echo "<pre>";
	print_r($estado4);
	echo "</pre>";

	echo "<br><br> Utilizando o construtor array numérico <br>";
	$estado5 = array("Rio Grande do Sul", "Santa Catarina", "Paraná", "São Paulo"); 
	echo "<pre>";
	print_r($estado5);
	echo "</pre>";

	echo "<br><br> Utilizando o construtor array associativo <br>";
	$estado6 = array('rs' => "Rio Grande do Sul",'sc' => "Santa Catarina", 'pr' => "Parana" );
	echo "<pre>";
	print_r($estado6);
	echo "</pre>";

	echo "<br><br> Exibindo dados de um array utilizando a estrutura for <br>";

	$estado7[] = "Rio Grande do Sul";
	$estado7[] = "Santa Catarina";
	$estado7[] = "Paraná";
	$estado7[] = "São Paulo";
	for ($i=0; $i < 4; $i++) { 
		echo "O estado $estado7[$i] está na posição $i do array.<br>";
	}

	echo "<br><br> Exibindo dados de um array utilizando a estrutura foreach<br>";
	$estado8[0] = "Rio Grande do Sul";
	$estado8[1] = "Santa Catarina";
	$estado8[3] = "Paraná";
	$estado8[7] = "São Paulo";
	foreach ($estado8 as $indice => $valor) {
		echo "Posição do elemento: $indice --->Valor do elemento: $valor<br>";
	}

?>