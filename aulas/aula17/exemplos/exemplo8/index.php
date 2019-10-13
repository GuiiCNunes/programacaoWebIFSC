<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exemplo 8</title>
  </head>
  <body>
    <form action="calcula.php" method="post">
      Informe o primeiro número: <input type="text" name="n1" required><br>
      Informe o segundo número: <input type="text" name="n2" required><br><br>
      Qual operação você deseja fazer com os números: <br>
      <input type="radio" name="operacoes" value="soma"> soma
      <input type="radio" name="operacoes" value="subtração"> subtração <br><br>
      <input type="submit" name="btn_enviar" value="Enviar">

    </form>
  </body>
</html>
