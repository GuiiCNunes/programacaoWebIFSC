<?php
  //ex. Matriz Nuérica
  $numerica [0][0] = 2;
  $numerica [0][1] = 3;
  $numerica [1][0] = 4;
  $numerica [1][1] = 5;
  echo "<pre>";
  print_r($numerica);
  echo "</pre>";

  echo "<br><br>";

  for ($i=0; $i < 2; $i++) {
    for ($j=0; $j < 2; $j++) {
      echo "Matriz[".($i+1)."][".($j+1)."] = ".$numerica[$i][$j]."<br>";
    }
  }

  //exmplo de matriz associativa
  $biometria["Pedro"]["idade"] = 19;
  $biometria["Pedro"]["peso"] = 65;
  $biometria["Pedro"]["altura"] = 1.7;
  $biometria["Maria"]["idade"] = 27;
  $biometria["Maria"]["peso"] = 56;
  $biometria["Maria"]["altura"] = 1.5;
  $biometria["José"]["idade"] = 62;
  $biometria["José"]["peso"] = 85;
  $biometria["José"]["altura"] = 1.4;

  echo "<pre>";
  print_r($biometria);
  echo "</pre>";

  foreach ($biometria as $nome => $informacoes) {
    echo "$nome <br>";
    foreach ($informacoes as $chave => $valor) {
      echo $chave;
      echo ": ";
      echo $valor;
      echo "<br>";
    }
    echo "<br><br>";
  }

?>
