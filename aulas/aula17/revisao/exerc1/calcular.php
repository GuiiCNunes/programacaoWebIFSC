<?php
  include("operacoes.inc.php");

  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $n3 = $_POST['n3'];
  $fazer1 = $_POST["fazer1"];
  if (isset($_POST['numeros'])) {
    $numeros = $_POST['numeros'];
  } //Trocando as variáveis globais para locais

  echo "<h3>Sr(a). ".$_POST['nome']."</h3><br><br>";
  echo "Os números escolhidos pelo usuário foram: $n1, $n2 e $n3 <br> A ordenação escolhida foi: ";
  if ($fazer1 == "crescente") {
    echo "Crescente <br>";
  }
  else {
    echo "Descrescente <br>";
  }
  ordenar($fazer1, $n1, $n2, $n3);

  if (isset($_POST['numeros'])) {
    if (isset($_POST['operacao'])) {
      echo "Os números selecionados foram: <br>";
      foreach($_POST['numeros'] as $valor){
        echo "$valor ";
      }

      echo "<br>As operações selecionadas foram: <br>";
      foreach ($_POST['operacao'] as $valor) {
        echo "$valor ";
      }
      echo "<br><br><b>Resultados:</b> <br>";
      foreach ($_POST['operacao'] as $valor) {
        if ($valor == "Soma") {
          $resultado = 0.0;
          foreach ($_POST['numeros'] as $valor) {
            $resultado = $resultado + $valor;
          }
          echo "O resultado da soma é: $resultado <br><br>";
        }
        if ($valor == "Subtração") {
          $resultado = 0.0;
          foreach ($_POST['numeros'] as $valor) {
            $resultado = $resultado - $valor;
          }
          echo "O resultado da subtração é: $resultado <br><br>";
        }
        if ($valor == "Divisão") { //Diferente porque se o resultado partir de zero, compromete a equação.
          $resultado = $numeros[0];
          for ($i = 1; $i < count($numeros); $i++) { //count para saber quantos números tem
            $resultado = $resultado / $numeros[$i];
          }
          echo "O resultado da divisão é: $resultado <br><br>";
        }
        if ($valor == "Multiplicação") { //Diferente porque se o resultado partir de zero, compromete a equação.
          $resultado = $numeros[0];
          for ($i = 1; $i < count($numeros); $i++) {
            $resultado = $resultado * $numeros[$i];
          }
          echo "O resultado da multiplicação é: $resultado <br><br>";
        }
      }
    }
    else {
      echo "Você não selecionou nenhuma operação.";
    }
  }
  else {
    echo "Você não marcou nenhum número.";
  }
?>
