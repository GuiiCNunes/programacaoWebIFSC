<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Eleição</title>
    <!-- Colocar fonte, estilo e revisar titulos de páginas -->
  </head>
  <body>
    <header>

    </header>
    <main>
      <div class="">
        <form class="" action="validar.php?tipo=eleitor" method="post">
          CPF: <input type="text" name="cpf" required placeholder="CPF com 11 digitos">
          <input type="submit" name="btn_votar" value="Votar">
        </form>
      </div>
      <div class="">
        <input type="button" name="btn_administrador" value="Espaço Administrador" onclick="location.href='login.php'">
      </div>
      <div class="">

      </div>
      <?php if (isset($_SESSION['ErroRestrito'])) {
        echo $_SESSION['ErroRestrito'];
        unset($_SESSION['ErroRestrito']); }
        if (isset($_SESSION['sair'])) {
          echo $_SESSION['sair'];
          unset($_SESSION['sair']); } ?>
    </main>
    <footer> </footer>
  </body>
</html>
