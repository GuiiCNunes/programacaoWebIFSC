<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 2 String</title>
	<meta charset="utf-8">
</head>
<body>
	<h2> Funções Importantes para manipulação de strings</h2>

	<?php $str = "Eu sou um string"; ?>

	<h4>Valor da Variável</h4>
	<?php echo $str; ?>

	<h4>Número de caracteres da string</h4>
	<?php echo strlen($str) ?>

	<h4>Primeiro Caracter da String</h4>
	<?php echo $str[0];//[pode alterar de 0 a n-1] ?>

	<h4>Ultimo Caracter da String</h4>
	<?php echo $str[-1]; //Sempre que usar o negativo vem de trás para frente[pode alterar de 0 a n-1] ?> 

	<h4>Extrair partes de uma string</h4>
	<?php echo substr($str, 0,4);//(variável , ondecomeçar[0~n-1] , quantos caracteres{se não especificar, vai até o final}) ?>
	<p>
	<?php echo substr($str, 3) ?>
</body>
</html>