<?php 
//Faça um programa em php que resolva seguinte formula: imposto = salario * 0.2. Apresentar o valor do imposto a ser pago. Passar os valores pela url.
	$salario = $_GET['salario'];
	$imposto = $salario * 0.2;
	echo "O imposto para salário de $salario é : $imposto";
?>