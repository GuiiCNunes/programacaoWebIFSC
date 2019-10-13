<?php
  include("operacoes.inc.php");

  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $n3 = $_POST['n3'];

  echo "<b>Os resultados para as 4 Operações Matemáticas para os números: $n1 , $n2 e $n3 são:</b><br>";
  echo "<br>Soma = ".soma($n1,$n2,$n3);
  echo "<br>Subtração = ".sub($n1,$n2,$n3);
  echo "<br>Divisão = ".div($n1,$n2,$n3);
  echo "<br>Multiplicação = ".mult($n1,$n2,$n3);

?>
