<?php
  if(!isset($_SESSION)){ session_start(); }
  if ($_SESSION['user'] == 'administrador') {
    $user = $_SESSION['user'];
    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Central de Configurações</title>
        <!-- Colocar fonte, estilo e revisar titulos de páginas -->
      </head>
      <body>
        <header>

        </header>
        <main>
          <div class="">
            <h1>Bem vind@, <?= $user;?>!</h1><br>
            <h2>O quê deseja fazer?</h2>
            <input type="button" name="btn_inserir" value="Inserir Novos Eleitores" onclick="location.href='inserir.php'"><br>
            <input type="button" name="btn_editar" value="Editar Eleitores" onclick="location.href='visualizar.php?acao=editar'"><br>
            <input type="button" name="btn_excluir" value="Excluir Eleitores" onclick="location.href='visualizar.php?acao=excluir'"><br>
            <input type="button" name="btn_visualizar" value="Relatório Eleitores" onclick="location.href='visualizar.php?acao=visualizar'"><br>
            <input type="button" name="btn_pendentes" value="Relatório Eleitores Pendentes" onclick="location.href='pendentes.php'"><br>
            <input contagem type="button" name="btn_contagem" value="Encerrar Eleição e contar os votos" onclick="location.href='contagem.php'"><br> <!-- Botão com campo especial contagem, fazer estilo específico -->

          </div>
          <div class="">
            <input type="button" name="btn_sair" value="Sair das Configurações" onclick="location.href='sair.php'"><br>
          </div>
          <div class="">
            <?php if (isset($_SESSION['resultado'])) {
              echo $_SESSION['resultado'];
              unset($_SESSION['resultado']); } ?>
          </div>
        </main>
        <footer> </footer>
      </body>
    </html>
  <?php } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
?>
