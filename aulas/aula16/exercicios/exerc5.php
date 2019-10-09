<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 5</title>
  </head>
  <body>
    <!-- Desenvolva um programa em php que receba quatro números inteiros e mostre o maior deles.
    Deverá ser criada uma função chamada comparanumeros que recebe dois valores inteiros e retorna o maior deles.
    A função pode ser usada quantas vezes forem necessárias. -->
    <form action="exerc5.php" method="post">
      <b>1º número: </b><input type="number" name="n1" required><br>
      <b>2º número: </b><input type="number" name="n2" required><br>
      <b>3º número: </b><input type="number" name="n3" required><br>
      <b>4º número: </b><input type="number" name="n4" required><br>
      <input type="submit" name="btn_enviar" value="Enviar">
      <input type="reset" name="btn_limpar" value="Apagar">
    </form>

    <?php
      function comparanumeros($n1,$n2){
        if ($n1 > $n2) {
          return $n1;
        }
        else {
          return $n2;
        }
      }
      if (isset($_POST['n1'])) {
        echo comparanumeros(comparanumeros(comparanumeros($_POST['n1'],$_POST['n2']), $_POST['n3']), $_POST['n4'] );
      }
    ?>
  </body>
</html>
