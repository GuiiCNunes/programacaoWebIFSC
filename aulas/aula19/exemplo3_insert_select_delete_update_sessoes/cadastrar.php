<?php session_start();
  if ($_SESSION['user']) { ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>Cadastro de Pessoas</title>
        </head>
        <body>
          <form class="" action="cadastrar.inc.php?funcao=cadastrar" method="post">
            <h3><b>Bem vindo a tela de cadastro</b></h3><br><br>
            Digite o nome: <input type="text" name="nome" required><br>
            Digite a idade: <input type="text" name="idade" required><br><br>
            <input type="submit" name="btn_enviar" value="Cadastrar">
            <input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'">
          </form>
        </body>
      </html>
<?php }
else {
  $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
  header("location: index.php");
} ?>
