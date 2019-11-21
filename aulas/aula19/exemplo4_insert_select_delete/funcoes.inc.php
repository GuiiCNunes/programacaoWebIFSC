<?php
  include("conexao.inc.php");

  $conexao = conectar("localhost","root","","aula");

  if ($_GET['funcao'] == cadastrar) {
    $inserirtitulo = trim($_POST['titulo']);
    $inserirduracao = trim($_POST['duracao']);
    $inserirobservacao = trim($_POST['observacao']);

    $consulta = "INSERT INTO conteudo (titulo,duracao, observacao) values ('$inserirtitulo', '$inserirduracao', '$inserirobservacao')";

    $executar = mysqli_query($conexao, $consulta);
    desconectar($conexao);
    header("location: visualizar.php");
  }
  elseif ($_GET['funcao'] == excluir) {
    $id = $_GET['id'];
    $consulta = "DELETE FROM conteudo where idconteudo = '$id'";
    $executar = mysqli_query($conexao, $consulta);
    desconectar($conexao);
    header("location: visualizar.php");
  }
?>
