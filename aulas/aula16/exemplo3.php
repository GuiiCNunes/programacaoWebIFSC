<?php
  function soma($valor1,$valor2) {
    $resultado = $valor1 + $valor2;
    return $resultado;
    //return $valor1 + $valor2; OUTRO JEITO QUE COLOCA SÓ ESSA LINHA
  }

  echo "A soma dos valores é: ".soma(7,9)."<br>";

  $resultado = soma(8,9);
  echo "A soma dos valores é: $resultado";
?>
