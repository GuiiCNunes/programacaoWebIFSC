<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Atividade 4</title>
  </head>
  <body>
    <form action="idade.php" method="POST">
      <b>Escreva o nome e a idade de duas pessoas:</b><br><br>
      1º nome:  <input type="text" name="nome1" required>  1ª idade: <input type="number" name="idade1" required>
      <br>
      2º nome:  <input type="text" name="nome2" required> 2ª idade: <input type="number" name="idade2" required><br>
      <input type="submit" name="btn_enviar" value="Enviar"> <input type="reset" name="btn_apagar" value="Apagar"><br><br>
    </form> <!-- Form para enviar os dados -->

  </body>
</html>
