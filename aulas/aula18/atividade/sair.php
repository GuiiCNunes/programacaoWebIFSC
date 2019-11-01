<?php
  session_start();
  if (isset($_SESSION['usuario']) and isset($_SESSION['id'])) {
    unset($_SESSION['usuario']);
    unset($_SESSION['id']);
    $_SESSION['DeslogarUsuario'] = 'Usuário deslogado com sucesso';
    header("location: index.php");

  } else {
    $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
    header("location: index.php");
  }
?>
