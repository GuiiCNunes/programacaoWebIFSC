<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 4</title>
  </head>
  <body>
    <!-- Desenvolva um programa em php que receba tres números inteiros e mostre o maior deles.
    Deverá ser criada uma função chamada comparanumeros que recebe três valores inteiros
    e retorna o maior deles. -->

    <form action="exerc4.php" method="post">
      <b>1º número: </b><input type="number" name="n1" required><br>
      <b>2º número: </b><input type="number" name="n2" required><br>
      <b>3º número: </b><input type="number" name="n3" required><br>
      <input type="submit" name="btn_enviar" value="Enviar">
      <input type="reset" name="btn_limpar" value="Apagar">
    </form>

    <?php
      function comparanumeros($n1,$n2,$n3){
        if ($n1 > $n2 && $n1 > $n3) {
          return $n1;
        }
        else if ($n1 < $n2 && $n2 > $n3){
          return $n2;
        }
        else {
          return $n3;
        }
      }
      if (isset($_POST['n1'])) {
        echo comparanumeros ($_POST['n1'],$_POST['n2'], $_POST['n3']);
      }
    ?>
  </body>
</html>
