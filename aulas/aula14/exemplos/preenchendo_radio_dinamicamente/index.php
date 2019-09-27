<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exemplo preencher radio dinamicamente</title>
  </head>
  <body>
    <?php
      $teste ['João'] = 12;
      $teste ['José'] = 22;
      $teste ['Carlos'] = 32;
      $teste ['Maria'] = 15;
    ?>
    <form action="radio.php" method="POST">
      <b>Escolha uma das pessoas abaixo: </b><br>
      <?php
        foreach ($teste as $nomes => $idades) {
      ?>
      <input type="radio" name="nomes" value="<?php echo $nomes; ?> "> <?php echo $nomes; ?>
      <?php
        }
      ?>
      <br><br>
      <input type="submit" name="btn_enviar" value="Enviar">
      <input type="reset" name="btn_apagar" value="Apagar">
    </form>

  </body>
</html>
