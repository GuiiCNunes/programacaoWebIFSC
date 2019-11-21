<?php
  session_start();

  if (isset($_SESSION['user'])) {
    include('conexao.inc.php');
    $conexao = conectar("localhost","root","","supermercado");

    if ($_GET['funcao'] == excluir) {
      $id = $_GET['id'];
      $consulta = "DELETE FROM pessoa where idpessoa = '$id'";
      $executar = mysqli_query($conexao, $consulta);
      desconectar($conexao);
      header("location: restrito.php");
    }

  }
  else {
    $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
    header("location: index.php");
  }
?>
