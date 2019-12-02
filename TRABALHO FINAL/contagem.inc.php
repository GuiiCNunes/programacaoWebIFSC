<?php
  session_start();
  if ($_SESSION['user'] == 'administrador') {
    if ($_SESSION['operacao'] == 'encerrar') {
      include('conexao.inc.php');
      unset($_SESSION['operacao']);
      $conexao = conectar("localhost", "root", "", "eleicao");
      $sql = "SELECT logovotado, COUNT(cod) AS contagem FROM eleitor where status = 'sim' group by logovotado";
      $contagemComVoto = mysqli_query($conexao, $sql);

      while ($resultado = mysqli_fetch_array($contagemComVoto)) {
        $candidato[$resultado['logovotado']] = $resultado['contagem'];
      }
      $maisVotos = 0;
      $maisVotado = 0;
      foreach ($candidato as $indice => $valor) {
        if ($maisVotos < $valor) {
          $maisVotos = $valor;
          $maisVotado = $indice;
        }
      }
      switch ($maisVotado) {
        case '1':
          $_SESSION['resultado'] = "O candidato eleito é Maurício Gabriba com $maisVotos votos";
          break;
        case '2':
          $_SESSION['resultado'] = "O candidato eleito é Marco Vezzani com $maisVotos votos";
          break;
        case '3':
          $_SESSION['resultado'] = "O candidato eleito é André Possa com $maisVotos votos";
          break;
        case '4':
          $_SESSION['resultado'] = "O candidato eleito é Consuelo Santos com $maisVotos votos";
          break;
      }
      header("location: administrador.php");

    } else {
      header("location: contagem.php");
    }
  } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
?>
