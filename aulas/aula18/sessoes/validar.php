<?php
  session_start();

  if (isset($_POST['login']) and $_POST['senha']) {
    if ($_POST['login'] == "guiicnunes" and $_POST['senha'] == "123456") {
      $_SESSION['usuario'] = $_POST['login'];
      header("location: restrito.php");
    } else {
      $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
      header("location: index.php");
    }
  } else {
    $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
    header("location: index.php");
  }
 ?>
