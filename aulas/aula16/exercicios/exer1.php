<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 1</title>
  </head>
  <body>
    <!-- Crie um form que receba o valor do auxilio alimentação e o valo do auxilio transporte.
    Os dados devem ser enviados para um arquivo php que terá uma constante para deinir o valor
    salariobase = 1200 e imprima na tela o salario do funcionário que é dado pela formula abaixo:
    salarioinal = salariobase + auxilioalimentação + auxiliotransporte; -->

    <form action="exer1.php" method="post">
      <b>Qual o valor do auxílio alimentação?</b><br>
      <input type="text" name="alimentacao" required><br>
      <b>Qual o valor do auxílio transporte?</b><br>
      <input type="text" name="transporte" required><br>
      <input type="submit" name="btn_enviar" value="Enviar">
    </form>

    <?php
      define("SALARIOBASE","1200");
      if (isset($_POST['alimentacao']) and isset($_POST['transporte'])) {
        $salariofinal = SALARIOBASE + $_POST['alimentacao'] + $_POST['transporte'];
        echo "O salário final é: $salariofinal";
      }
    ?>
  </body>
</html>
