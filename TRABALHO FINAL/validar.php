<?php
  session_start();
  if ($_GET['tipo'] == 'eleitor') {
    include('conexao.inc.php');
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $cpf = $_POST['cpf'];
    $sql = "SELECT cod, nome, cpf, status FROM eleitor where cpf = '$cpf'";
    $executar = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($executar) == 1) {
      $_SESSION['user'] = "eleitor";
      while ($resultado = mysqli_fetch_array($executar)) {
        $_SESSION['cod'] = $resultado['cod'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['cpf'] = $resultado['cpf'];
        $_SESSION['status'] = $resultado['status'];
      }
      header("location: votacao.php");
    } else {
      $_SESSION['ErroRestrito'] = "Usuário Inexistente";
      header("location: index.php");
    }
  } elseif ($_GET['tipo'] == 'admin') {
    if (isset($_POST['login']) && isset($_POST['senha'])) {
      if ($_POST['login'] == 'admin' && $_POST['senha'] == 'admin') {
        $_SESSION['user'] = "administrador";
        header("location: administrador.php");
      } else {
        $_SESSION['ErroRestrito'] = "Senha inválida";
        header("location: login.php");
      }
    } else {
      $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
      header("location: login.php");
    }
  } else {
    $_SESSION['ErroRestrito'] = "Você precisa ter credenciais válidas.";
    header("location: index.php");
  }
 ?>
