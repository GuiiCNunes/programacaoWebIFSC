<?php
  if(!isset($_SESSION)){ session_start(); }
    if ($_SESSION['user'] == 'administrador') {
      include("layoutpag.php");
      $user = $_SESSION['user'];
      ?>
        <main class="conteudo">
          <div class="administrador">
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
    <?php } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
?>
