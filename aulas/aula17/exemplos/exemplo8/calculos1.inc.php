<?php
  function oper($operacao, $valor1, $valor2) {
    if ($operacao == "soma") {
      return $valor1 + $valor2;
    }
    else {
      return $valor1 - $valor2;
    }
  }
?>
