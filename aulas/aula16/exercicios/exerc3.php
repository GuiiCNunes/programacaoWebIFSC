<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 3</title>
  </head>
  <body>
    <!-- Desenvolva um programa em PHP que irá receber um valor em dolar.
    Criar um função chamada convertemoeda que recebe o valor em dolar
    e faz a conversão desse valor para real.
    O valor convertido deve ser apresentado para o usuário. -->

    <form action="exerc3.php" method="post">
      <b>Valor em reais:</b><input type="text" name="real" required><br>
      <input type="submit" name="btn_enviar" value="Enviar">
    </form>
    <?php
      define ("DOLAR","4.06");
      function convertemoeda($n){
        return $n / DOLAR;
      }
      if (isset($_POST['real'])) {
        echo "O valor de R$ ".number_format($_POST['real'],2,",",".")." da U$ ".number_format(convertemoeda($_POST['real']),2,",",".");
      }
    ?>
  </body>
</html>
