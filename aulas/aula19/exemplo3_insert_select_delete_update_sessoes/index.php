<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tela de Login</title>
  </head>
  <body>
    <form class="" action="validar.php" method="post">
      <h3>Logar:</h3><br>
      Usuário: <input type="text" name="user" required><br>
      Senha: <input type="password" name="password"><br><br>
      <input type="submit" name="btn_acessar" value="Acessar">
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
