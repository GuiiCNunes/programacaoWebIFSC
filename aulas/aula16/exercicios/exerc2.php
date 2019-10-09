<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 2</title>
  </head>
  <body>
    <!-- Desenvolva um programa em php que receba um número inteiro qualquer.
    Devera ser criada uma função verificaparimpar que receberá esse valor
    e retornará uma mensagem informando se o número é par ou impar. -->

    <form action="exerc2.php" method="POST">
      <b>Qual é o número?</b><br>
      <input type="number" name="numero" required><br>
      <input type="submit" name="btn_enviar" value="Enviar"><br>
    </form>

    <?php

      if (isset($_POST['numero'])) {
        function verificaparimpar($n1){
          if ($n1%2==0) {
            $resultado = "O número $n1 é par.";
            return $resultado;
          }
          else {
            $resultado = "O número $n1 é impar.";
            return $resultado;
          }
        }

        echo verificaparimpar($_POST['numero']);
      }
    ?>
  </body>
</html>
