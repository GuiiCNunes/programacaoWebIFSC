<?php
  session_start();

  if (isset($_POST['login']) and isset($_POST['senha']) and isset($_POST['tipo'])) {
    if ($_POST['login'] == "pedrosilva" and $_POST['senha'] == "123456" and $_POST['tipo'] == "Administrador") {
      $_SESSION['usuario'] = $_POST['login'];
      $_SESSION['id'] = 1;
      header("location: administrador.php");
    }
    elseif ($_POST['login'] == "mariasilva" and $_POST['senha'] == "123456" and $_POST['tipo'] == "Desenvolvedor") {
      $_SESSION['usuario'] = $_POST['login'];
      $_SESSION['id'] = 2;
      header("location: desenvolvedor.php");
    }
    elseif ($_POST['login'] == "josesilva" and $_POST['senha'] == "123456" and $_POST['tipo'] == "Usuário") {
      $_SESSION['usuario'] = $_POST['login'];
      $_SESSION['id'] = 3;
      header("location: usuario.php");
    }
    else {
      $_SESSION['ErroLogin'] = 'Login, Senha ou Tipo inválidos.';
      header("location: index.php");
    }
  }
  else {
    $_SESSION['ErroLogin'] = 'Login, Senha ou Tipo inválidos.';
    header("location: index.php");
  }
?>
