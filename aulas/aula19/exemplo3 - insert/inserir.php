<?php
  include("funcoes.php");

  $conexao = conectar("localhost","root","","supermercado");

  $inserirnome = trim($_POST['nome']);
  $inseriridade = trim($_POST['idade']);

  $consulta = "INSERT INTO pessoa (nome,idade) values ('$inserirnome', '$inseriridade')";

  if ($_GET['funcao'] == cadastrar) {
    $executar = mysqli_query($conexao, $consulta);
    desconectar($conexao);
    header("location: visualizar.php");
  }
?>
