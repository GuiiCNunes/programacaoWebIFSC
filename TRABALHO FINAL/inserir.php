<?php
  session_start();
  if ($_SESSION['user'] == "administrador") { ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Inserir Eleitor</title>
        <!-- Colocar fonte, estilo e revisar titulos de páginas -->
      </head>
      <body>
        <header>

        </header>
        <main>
          <div class="">
            <form class="" action="inserir.inc.php" method="post"> <!-- POST para a mesma página? -->
              <h1>Insira os dados do eleitor</h1><br>
              Nome: <input type="text" name="nome" required><br>
              CPF: <input type="number" name="cpf" placeholder="Apenas os 11 números"><br>
              <input type="submit" name="btn_cadastrar" value="Cadastrar">
              <input type="button" name="btn_voltar" value="Voltar" onclick="location.href='administrador.php'">
            </form>
          </div>
        </main>
        <footer></footer>
      </body>
    </html>
  <?php
    if (isset($_SESSION['resultado'])) {
      echo $_SESSION['resultado'];
      unset($_SESSION['resultado']);
    }
  } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  } ?>
