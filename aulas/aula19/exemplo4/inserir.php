<?php
  include("funcoes.php");

  $conexao = conectar("localhost","root","","aula");

  $inserirtitulo = trim($_POST['titulo']);
  $inserirduracao = trim($_POST['duracao']);
  $inserirobservacao = trim($_POST['observacao']);

  $consulta = "INSERT INTO conteudo (titulo,duracao, observacao) values ('$inserirtitulo', '$inserirduracao', '$inserirobservacao')";

  if ($_GET['funcao'] == cadastrar) {
    $executar = mysqli_query($conexao, $consulta);
    desconectar($conexao);
    header("location: visualizar.php");
  }
?>
