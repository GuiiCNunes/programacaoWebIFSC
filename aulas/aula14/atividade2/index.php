<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Atividade 2</title>
  </head>
  <body>
    <?php

      $capitais["Florianópolis"] = 477000;
      $capitais["São Paulo"] = 12100000;
      $capitais["João Pessoa"] = 720950;
      $capitais["Salvador"] = 2670000;
      $capitais["Porto Alegre"] = 1480000;
    ?>
    <form action="index.php" method="POST">
      <b>Escolha uma cidade para mostrar a população: </b><br><br>

      <?php foreach($capitais as $indice => $valores) { //Inicio da repetição
      ?>
      <input type="radio" name="populacao" value="<?php echo $indice; //escrevendo valor ?>">
      <?php echo $indice;//escrevendo conteudo ?>
    <?php }//fim da repetição (foreach)
    ?>
    <br><br>
    <select name="fazer">
      <option value="fazer1">Mostrar a população da cidade selecionada no campo anterior</option>
      <option value="fazer2">Mostrar as cidades e suas populações em ordem crescente de cidades</option>
      <option value="fazer3">Mostrar as cidades e suas populações em ordem decrescente de cidades</option>
      <option value="fazer4">Mostrar a média populacional entre as cidades</option>
      <option value="fazer5">Mostrar a maior população e a cidade</option>
      <option value="fazer6">Mostrar as cidades que tem população abaixo da média populacional</option>
    </select><br><br>
    <input type="submit" name="btn_enviar" value="Enviar">
    <input type="reset" name="btn_apagar" value="Apagar">
  </form> <br><br>

    <?php
      if (isset($_POST['fazer'])) {
        if ($_POST['fazer'] == "fazer1") {
          foreach ($capitais as $indice => $valor) {
            if ($_POST['populacao'] == $indice) {
              echo number_format($valor,0,",",".");
            }
          }
        }
        if ($_POST['fazer'] == "fazer2" )  {
          ksort($capitais);
          foreach ($capitais as $indice => $valor) {
            echo "Cidade: ".$indice." <br>População: ".number_format($valor,0,",",".")."<br><br>";
          }
        }
        if ($_POST['fazer'] == "fazer3" )  {
          krsort($capitais);
          foreach ($capitais as $indice => $valor) {
            echo "Cidade: ".$indice." <br>População: ".number_format($valor,0,",",".")."<br><br>";
          }
        }
        if ($_POST['fazer'] == "fazer4") {
          $totalpopulacao = 0; //Variável para receber o total da população
          foreach ($capitais as $valor) {
            $totalpopulacao += $valor;
          }
          echo "A média da população é: ".number_format(($totalpopulacao/count($capitais)),0,",",".")."<br><br>";
        }
        if ($_POST['fazer'] == "fazer5") {
          $maiorpopulacao = 0; //Pegar a maior população
          $maiorcapital = " "; //Guardar o nome
          foreach ($capitais as $indice => $valor) {
            if ($valor > $maiorpopulacao) {
              $maiorpopulacao = $valor;
              $maiorcapital = $indice;
            }
          }
          echo "A maior população é ".number_format($maiorpopulacao,0,",",".")." da cidade: ".$maiorcapital;
        }
        if ($_POST['fazer'] == "fazer6") {
          $totalpopulacao = 0; //Variável para receber o total da população
          foreach ($capitais as $valor) {
            $totalpopulacao += $valor;
          }
          $media = $totalpopulacao/count($capitais);
          echo "<b>Cidades abaixo da média de ".number_format($media,0,",",".")." pessoas: </b><br><br>";
          foreach ($capitais as $indice => $valor) {
            if ($valor < $media) {
              echo "Cidade: ".$indice."<br>População: ".number_format($valor,0,",",".")."<br><br>";
            }
          }
        }

      }
    ?>
  </body>
</html>
