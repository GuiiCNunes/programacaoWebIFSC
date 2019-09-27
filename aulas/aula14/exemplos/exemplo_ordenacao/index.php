<?php 
	//Exemplo uso SORT
	$nomes = ["joão","maria","josé","pedro","alice","bruna"];
	echo "Vetor Original <br><br>";
	echo "<pre>";
	print_r($nomes);
	echo "</pre>";

	echo "<br><br> Ordem crescente sem levar os indices<br><br>";
	sort($nomes);
	echo "<pre>";
	print_r($nomes);
	echo "</pre>";

	//Exemplo uso RSORT
	$nomes1 = ["joão","maria","josé","pedro","alice","bruna"];
	echo "Vetor Original <br><br>";
	echo "<pre>";
	print_r($nomes1);
	echo "</pre>";

	echo "<br><br> Ordem decrescente sem levar os indices<br><br>";
	rsort($nomes1);
	echo "<pre>";
	print_r($nomes1);
	echo "</pre>";

	//Exemplo uso ASORT
	$nomes2 = ["joão","maria","josé","pedro","alice","bruna"];
	echo "Vetor Original <br><br>";
	echo "<pre>";
	print_r($nomes2);
	echo "</pre>";

	echo "<br><br> Ordem crescente de valor e levar os indices<br><br>";
	asort($nomes2);
	echo "<pre>";
	print_r($nomes2);
	echo "</pre>";

	//Exemplo uso ARSORT
	$nomes3 = ["joão","maria","josé","pedro","alice","bruna"];
	echo "Vetor Original <br><br>";
	echo "<pre>";
	print_r($nomes3);
	echo "</pre>";

	echo "<br><br> Ordem decrescente de valor e levar os indices<br><br>";
	arsort($nomes3);
	echo "<pre>";
	print_r($nomes3);
	echo "</pre>";

	//Exemplo KSORT
	$nomes4[0]="joão";
	$nomes4[3]="maria";
	$nomes4[5]="josé";
	$nomes4[2]="pedro";
	$nomes4[1]="alice";
	$nomes4[7]="bruna";
	echo "Vetor Original <br><br>";
	echo "<pre>";
	print_r($nomes4);
	echo "</pre>";

	echo "<br><br> Ordem crescente do indice e leva o valor junto<br><br>";
	ksort($nomes4);
	echo "<pre>";
	print_r($nomes4);
	echo "</pre>";

	//Exemplo KRSORT
	$nomes5[0]="joão";
	$nomes5[3]="maria";
	$nomes5[5]="josé";
	$nomes5[2]="pedro";
	$nomes5[1]="alice";
	$nomes5[7]="bruna";
	echo "Vetor Original <br><br>";
	echo "<pre>";
	print_r($nomes5);
	echo "</pre>";

	echo "<br><br> Ordem decrescente do indice e leva o valor junto<br><br>";
	krsort($nomes5);
	echo "<pre>";
	print_r($nomes5);
	echo "</pre>";
?>