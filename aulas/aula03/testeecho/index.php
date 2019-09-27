<?php 
//Echo pode inserir código html
echo "Boa tarde <br>";
echo 'Boa tarde';
//Variável:
$n1 =122;
$n2= 22;
//Imprime o valor da variável
echo "<br> $n1";
//Erro abaixo, aspas simples trata tudo como string
echo '<br> $n1';
//Mostrar valor da soma:Dentro das aspas duplas ele não consegue fazer o processamento
echo "<br>A soma dos valores é: $n1+$n2";
//Opção, nova variável:
$soma = $n1+$n2;
echo "<br>A soma dos valores é: $soma";
//Sem nova variável:
echo "<br>A soma dos valores é:".($n1+$n2);
?>