<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 2</title>
  </head>
  <body>
    <?php
      $times = array("Corinthians", "Flamengo", "Grêmio", "Internacional", "Figueirense", "Avaí");
    ?>
    <form action="mostratorcedor.php" method="post">
      <b>Escolha o time:</b><br>
      <?php foreach($times as $valor){ ?>
        <input type="radio" name="time" value="<?php echo $valor; ?>"> <?php echo $valor ?>
      <?php } ?>
      <br><br>

      <input type="submit" name="btn_enviar" value="Enviar">
    </form>
  </body>
</html>
