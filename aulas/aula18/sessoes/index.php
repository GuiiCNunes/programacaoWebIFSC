<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Autenticação</title>
  </head>
  <body>
    <form action="validar.php" method="post">
      <h2>Área Restrita</h2><br>
      Login: <input type="text" name="login" placeholder="Login" required autofocus>
      Senha: <input type="password" name="senha" placeholder="Senha" required>
      <input type="submit" name="btn_enviar" value="Acessar">


    </form>
  </body>
</html>

<?php
  if (isset($_SESSION['ErroLogin'])) {
    echo $_SESSION['ErroLogin'];
    unset($_SESSION['ErroLogin']);
  }
  if (isset($_SESSION['DeslogarUsuario'])) {
    echo $_SESSION['DeslogarUsuario'];
    unset($_SESSION['DeslogarUsuario']);
  }
?>
