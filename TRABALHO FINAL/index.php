<?php session_start();
  include("layoutpag.php")?>

    <main class="conteudo">
      <div class="imagem">
        <img src="https://redesemfio.ifsc.edu.br/files/2013/08/g14.png" alt="" height="180px">
      </div>
      <div class="login">
        <form class="" action="validar.php?tipo=eleitor" method="post">
          CPF: <input type="text" name="cpf" required placeholder="CPF com 11 digitos" minlength="11" maxlength="11"><br>
          <input type="submit" name="btn_votar" value="Votar"><br>
        </form>
      </div>
      <div class="">
        <input type="button" name="btn_administrador" value="Espaço Administrador" onclick="location.href='login.php'">
      </div>
        <?php if (isset($_SESSION['ErroRestrito'])) {
          echo $_SESSION['ErroRestrito'];
          unset($_SESSION['ErroRestrito']); }
          if (isset($_SESSION['sair'])) {
            echo $_SESSION['sair'];
            unset($_SESSION['sair']);
           } ?>
      </div>
    </main>
