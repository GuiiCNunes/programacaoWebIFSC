<?php
session_start();

if(isset($_SESSION['user'])) {
    include("conexao.inc.php");

    $conexao = conectar("localhost","root","","supermercado");

    if ($_GET['funcao'] == cadastrar) {
      $inserirnome = trim($_POST['nome']);
      $inseriridade = trim($_POST['idade']);
      $consulta = "INSERT INTO pessoa (nome,idade) values ('$inserirnome', '$inseriridade')";
      $executar = mysqli_query($conexao, $consulta);
      desconectar($conexao);
      header("location: restrito.php");
    }
  } else {
    $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
    header("location: index.php");
  }
