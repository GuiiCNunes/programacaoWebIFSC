<?php 

$n1 = $_POST['n1'];
$n2  = $_POST['n2'];
$soma = $n1+$n2;
$subtracao = $n1-$n2;
$multiplicacao = $n1*$n2;
$divisao = $n1/$n2;

echo "Operações Realizadas: <br><br>";
echo "Soma dos números $n1+$n2=$soma<br>";
echo "Subtração dos números $n1-$n2=$subtracao<br>";
echo "Multiplicação dos números $n1*$n2=$multiplicacao<br>";
echo "Divisão dos números $n1/$n2=$divisao<br>";

 ?>