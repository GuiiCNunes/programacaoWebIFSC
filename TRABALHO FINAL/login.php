<?php session_start();
include("layoutpag.php"); ?>
    <main class="conteudo">
      <div class="imagem">
        <img src="https://redesemfio.ifsc.edu.br/files/2013/08/g14.png" alt="" height="180px">
      </div>
      <div class="">
        <h1>Área do Administrador:</h1><br>
      </div>
      <div class="login">
        <form action="validar.php?tipo=admin" method="post">
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
