<?php
  session_start();
  if ($_SESSION['user'] == 'eleitor') {
    include("layoutpag.php");
    $nome = $_SESSION['nome'];
    $cpf = $_SESSION['cpf']; ?>
    <!DOCTYPE html>
      <main class="conteudo">
        <div class="topo">
          <h1>Por favor, confirme seus dados:</h1>
          <ul>
            <li><?= $nome; ?></li>
            <li><?= $cpf; ?></li>
          </ul>
        </div> <!-- Maurício Gabriba, Marco Vezzani, André Possa e Consuelo Santos -->
        <?php if($_SESSION['status'] == 'nao') {?>
        <div class="">
          <form class="" action="computaVoto.php" method="post">
            <input type="radio" name="candidato" value="1" required> Maurício Gabriba <br>
            <input type="radio" name="candidato" value="2"> Marco Vezzani <br>
            <input type="radio" name="candidato" value="3"> André Possa <br>
            <input type="radio" name="candidato" value="4"> Consuelo Santos <br>
            <input type="submit" name="btn_votar" value="CONFIRMA" class="confirma">
          </form>
        </div>
      <?php } else{ ?>
        <div class="">
          <h1>Seu voto já consta em nosso banco.</h1>
          <input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'">
        </div>
      <?php } ?>
      </main>
  <?php } else {
    $_SESSION['ErroRestrito'] = "Você precisa ser um eleitor cadastrado.";
    header("location: index.php");
  }
?>
