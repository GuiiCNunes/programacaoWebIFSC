<?php
  session_start();
  if ($_SESSION['user'] == "administrador") {
    include("conexao.inc.php");
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $id = $_POST['id'];
    $editarNome = $_POST['nome'];
    $editarCPF = $_POST['cpf'];
    $sql = "UPDATE eleitor set nome = '$editarNome', cpf = '$editarCPF' where codeleitor = '$id'";
    $query = mysqli_query($conexao, $sql);
    
    if (mysqli_query($conexao, $sql) == TRUE) {
      desconectar($conexao);
      $_SESSION['resultado'] = "Eleitor editado com sucesso!";
      header("location: administrador.php");
    } else {
      desconectar($conexao);
      $_SESSION['resultado'] = "NÃO FOI POSSÍVEL EDITAR O ELEITOR!";
      header("location: administrador.php");
    }
  } else {
    $_SESSION['ErroRestrito'] = "Você precisa ter credenciais válidas.";
    header("location: index.php");
  }
?>
