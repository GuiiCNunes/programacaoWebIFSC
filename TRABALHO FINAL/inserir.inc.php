<?php
  if (!isset($_SESSION)){ session_start(); }
  if ($_SESSION['user'] == 'administrador') {
    include('conexao.inc.php');
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $inserirNome = $_POST['nome'];
    $inserirCPF = $_POST['cpf'];
    $sql = "INSERT INTO eleitor (nome,cpf,status,candidato) values ('$inserirNome', '$inserirCPF', 'nao', '0')";
    if (mysqli_query($conexao, $sql) == TRUE) {
      desconectar($conexao);
      $_SESSION['resultado'] = "Novo eleitor cadastrado com sucesso!";
      header("location: inserir.php");
    } else {
      desconectar($conexao);
      $_SESSION['resultado'] = "NÃO FOI POSSÍVEL CADASTRAR USUÁRIO!";
      header("location: inserir.php");
    }
  } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  } ?>
?>
