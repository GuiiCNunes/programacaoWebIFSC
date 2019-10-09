<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 1</title>
  </head>
  <body>
    <!-- Desenvolva um programa em php que receba dois valores inteiros.
    Criar as seguintes funções:
    - Soma – irá receber os dois números e retornar o valor da soma;
    - Subtracao – irá receber os dois números e retornar o valor da subtracao do primeiro pelo segundo;
    - Multiplicação – irá receber os dois números e retornar o valor da multiplicação dos números;
    - Divisao – irá receber os dois números e retornar o valor da divisao dos números;
    Apresentar para o usuário os valores da soma, subtracao, divisao e multiplicação. -->

    <form action="exerc1.php" method="POST">
      <b>Primeiro valor: </b><input type="number" name="n1" required><br>
      <b>Segundo valor: </b><input type="number" name="n2" required><br>
      <input type="submit" name="btn_enviar" value="Enviar">
    </form>

    <?php
      function soma($m1,$m2){
        $resultado = $m1 + $m2;
        return $resultado;
      }
      function sub($m1,$m2){
        $resultado = $m1 - $m2;
        return $resultado;
      }
      function div($m1,$m2){
        $resultado = $m1 / $m2;
        return $resultado;
      }
      function mult($m1,$m2){
        $resultado = $m1 * $m2;
        return $resultado;
      }
      if (isset($_POST['n1']) and isset($_POST['n2'])) {
        echo "Soma: ".soma($_POST['n1'], $_POST['n2']);
        echo "<br>Subtração: ".sub($_POST['n1'], $_POST['n2']);
        echo "<br>Divisão: ".div($_POST['n1'], $_POST['n2']);
        echo "<br>Multiplicação: ".mult($_POST['n1'], $_POST['n2']);
      }
    ?>
  </body>
</html>
