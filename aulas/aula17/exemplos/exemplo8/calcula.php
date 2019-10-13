<?php
  include("calculos.inc.php");
  include("calculos1.inc.php");

  $operacoes = $_POST['operacoes'];
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];

  if ($operacoes == "soma") {
    echo "A soma dos números $n1 + $n2 = ".soma($n1,$n2);
  }
  else {
    echo "A subtração dos números $n1 - $n2 = ".subtracao($n1,$n2);
  }

  echo "<br><br>A $operacao dos números $n1 e $n2 é: ".oper($operacoes, $n1 , $n2);

?>
