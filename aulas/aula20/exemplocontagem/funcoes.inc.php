<?php
  include("conexao.inc.php");

  $conexao = conectar("localhost", "root", "", "exemplo");

  if ($_GET['funcao'] == 'encerrarvotacao') {
    // Votos do Candidato 1
    $consulta = "SELECT * FROM votacao where voto = '1'";
    $query = mysqli_query($conexao,$consulta);
    $numvoto1 = mysqli_num_rows($query); // Conta o número de linhas;

    // Votos do Candidato 2
    $consulta = "SELECT * FROM votacao where voto = '2'";
    $query = mysqli_query($conexao,$consulta);
    $numvoto2 = mysqli_num_rows($query); // Conta o número de linhas;

    echo "Total de votos do candidato 1: $numvoto1<br><br>";
    echo "Total de votos do candidato 2: $numvoto2<br><br>";

    if ($numvoto1 > $numvoto2) {
      echo "Candidato 1 foi o vencedor da eleição<br>";
    } else {
      echo "Candidato 2 foi o vencedor da eleição<br>";
    }
  }
