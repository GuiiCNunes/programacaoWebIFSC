<?php
  include("conexao.inc.php");

  $conexao = conectar("localhost","root","","supermercado");

  if ($_GET['funcao'] == cadastrar) {
    $inserirnome = trim($_POST['nome']);
    $inseriridade = trim($_POST['idade']);
    $consulta = "INSERT INTO pessoa (nome,idade) values ('$inserirnome', '$inseriridade')";
    $executar = mysqli_query($conexao, $consulta);
    desconectar($conexao);
    header("location: visualizar.php");
  }
  elseif ($_GET['funcao'] == excluir) {
    $id = $_GET['id'];
    $consulta = "DELETE FROM pessoa where idpessoa = '$id'";
    $executar = mysqli_query($conexao, $consulta);
    desconectar($conexao);
    header("location: visualizar.php");
  }
?>
