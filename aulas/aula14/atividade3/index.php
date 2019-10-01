<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Atividade 3</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <b>Escreva a matrícula e o salário dos funcionários:</b><br><br>
      Matrícula 1º funcionário: <input type="text" name="matricula1" required><br>
      Salário 1º funcionário: <input type="text" name="salario1" required><br><br>
      Matrícula 2º funcionário: <input type="text" name="matricula2" required><br>
      Salário 2º funcionário: <input type="text" name="salario2" required><br><br>
      Matrícula 3º funcionário: <input type="text" name="matricula3" required><br>
      Salário 3º funcionário: <input type="text" name="salario3" required><br><br>
      <input type="submit" name="btn_enviar" value="Enviar">
      <input type="reset" name="btn_limpar" value="Limpar">
    </form><br><br>

    <?php
    if (isset($_POST['matricula1'])) {
      $salarios[$_POST['matricula1']] = $_POST['salario1'];
      $salarios[$_POST['matricula2']] = $_POST['salario2'];
      $salarios[$_POST['matricula3']] = $_POST['salario3'];
      $cont = 1;
      foreach ($salarios as $indice => $valor) {
        if ($valor < "998") {
        echo "Matrícula: ".$indice."<br>Salário: ".number_format($valor,2,",",".")."<br>";
        $cont++;
        }
      }

      if ($cont = 1) {
        echo "Nenhum salário é menor que R$ 998,00.";
      }
     }
     ?>
  </body>
</html>
