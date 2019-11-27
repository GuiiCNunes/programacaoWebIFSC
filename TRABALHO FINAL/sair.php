<?php
  session_start();
  if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] == 'administrador') {
      unset($_SESSION['user']);
      $_SESSION['sair'] = "Deslogado com sucesso.";
      header("location: login.php");
    } elseif ($_SESSION['user'] == 'eleitor') {
      unset($_SESSION['user']);
      unset($_SESSION['codeleitor']);
      unset($_SESSION['nome']);
      unset($_SESSION['cpf']);
      if ($_SESSION['status'] == 'nao') {
        $_SESSION['sair'] = "Voto Computado com Sucesso!";
      } else {
        $_SESSION['sair'] = "Logout Realizado.";
      }
      unset($_SESSION['status']);
      header("location: index.php");
    }
  } else {
    $_SESSION['ErroRestrito'] = "Você precisa ter credenciais válidas.";
    header("location: index.php");
  }

?>
