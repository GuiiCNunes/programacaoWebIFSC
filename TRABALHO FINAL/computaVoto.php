<?php
  session_start();
  if ($_SESSION['user'] == 'eleitor') {
    include("conexao.inc.php");
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $codeleitor = $_SESSION['codeleitor'];
    $cpf = $_SESSION['cpf'];
    $voto = $_POST['candidato'];
    $guardaVoto = "UPDATE eleitor set status='sim', candidato='$voto' where codeleitor='$codeleitor'";
    if (mysqli_query($conexao, $guardaVoto) == true) {
      header("location: sair.php");
    } 
  } else {
    $_SESSION['ErroRestrito'] = "Você precisa ser um eleitor cadastrado.";
    header("location: index.php");
  }
?>
