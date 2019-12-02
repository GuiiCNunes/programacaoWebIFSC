<?php
  session_start();
  if ($_SESSION['user'] == "administrador") {
    include("layoutpag.php"); ?>
      <main class="conteudo">
        <div class="titulo">
          <h1>Insira os dados do eleitor</h1><br>
        </div>
        <div class="">
          <form class="" action="inserir.inc.php" method="post"> <!-- POST para a mesma página? -->
            Nome: <input type="text" name="nome" required><br>
            CPF: <input type="text" name="cpf" placeholder="Apenas os 11 números" minlength="11" maxlength="11"><br>
            <input type="submit" name="btn_cadastrar" value="Cadastrar">
            <input type="button" name="btn_voltar" value="Voltar" onclick="location.href='administrador.php'">
          </form>
        </div>
        <div class="">
          <?php if (isset($_SESSION['resultado'])) {
            echo $_SESSION['resultado'];
            unset($_SESSION['resultado']);
          } ?>
        </div>
      </main>
  <?php
  } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  } ?>
