<?php
  function ordenar($op,$n1,$n2,$n3){
    $numeros = array("$n1", "$n2", "$n3");

    if ($op == "crescente") {
      sort($numeros);
      echo "Os números em ordem crescente ficam: <br>";
      foreach($numeros as $valor){
        echo "$valor, ";
      }
      echo "<br><br>";
    }
    else {
      rsort($numeros);
      echo "Os números em ordem decrescente ficam: <br>";
      foreach($numeros as $valor){
        echo "$valor, ";
      }
      echo "<br><br>";
    }
  }
?>
