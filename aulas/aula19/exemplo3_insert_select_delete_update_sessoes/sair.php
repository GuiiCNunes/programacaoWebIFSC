<?php
  session_start();
  if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    $_SESSION['DeslogarUsuario'] = 'Usuário deslogado com sucesso';
    header("location: index.php");

  } else {
    $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
    header("location: index.php");
  }
?>
