<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Administrador</title>
    <!-- Colocar fonte, estilo e revisar titulos de páginas -->
  </head>
  <body>
    <header>

    </header>
    <main>
      <div class="">
        <form class="" action="validar.php?tipo=admin" method="post">
          Login: <input type="text" name="login" required><br>
          Senha: <input type="password" name="senha" required><br>
          <input type="submit" name="btn_entrar" value="Entrar">
          <input type="button" name="btn_voltar" value="Voltar" onclick="location.href='index.php'">
        </form>
      </div>
      <?php if (isset($_SESSION['ErroRestrito'])) {
        echo $_SESSION['ErroRestrito'];
        unset($_SESSION['ErroRestrito']); }
        if (isset($_SESSION['sair'])) {
          echo $_SESSION['sair'];
          unset($_SESSION['sair']); } ?>
    </main>
    <footer></footer>
  </body>
</html>
