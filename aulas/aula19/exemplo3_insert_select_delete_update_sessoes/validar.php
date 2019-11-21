<?php 
  session_start();

  if (isset($_POST['user']) && isset($_POST['password'])) {
    if ($_POST['user'] == "admin" and $_POST['password'] == "admin") {
      $_SESSION['user'] = $_POST['user'];
      header("location: restrito.php");
    }
    else {
      $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
      header("location: index.php");
    }
  }
  else {
    $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
    header("location: index.php");
  }
