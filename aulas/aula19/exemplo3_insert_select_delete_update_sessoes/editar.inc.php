<?php
  session_start();

  if(isset($_SESSION['user'])) {
    include("conexao.inc.php");

    $conexao = conectar("localhost","root","","supermercado");

    if ($_GET['funcao'] == 'editar') {
      $id = $_GET['id'];
      $inserirnome = trim($_POST['nome']);
      $inseriridade = trim($_POST['idade']);

      $consulta = "UPDATE pessoa set nome = '$inserirnome', idade = '$inseriridade' where idpessoa = '$id'";
      $executar = mysqli_query($conexao, $consulta);
      desconectar($conexao);
      header("location: restrito.php");
    }
  } else {
    $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
    header("location: index.php");
  }
?>
