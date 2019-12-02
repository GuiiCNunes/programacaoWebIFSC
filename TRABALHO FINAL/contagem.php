<?php
  session_start();
  if ($_SESSION['user'] == 'administrador') {
    include("layoutpag.php");
    include("conexao.inc.php");
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $sql = "SELECT COUNT(cod) AS contagem FROM eleitor where status = 'nao'";
    $contagemSemVoto = mysqli_query($conexao, $sql);
    while ($resultado = mysqli_fetch_array($contagemSemVoto)) {
      $quantidade = $resultado['contagem'];
    } ?>
      <main class="conteudo">
        <div class="titulo">
          <h1>Tem certeza que deseja encerrar a eleição?</h1><br>
        </div>
        <div class="">
          <form class="" action="#" method="post">
            Eleitores que ainda não votaram:<?= $quantidade; ?><br><br>
            <select class="" name="confirma">
              <option value="nao">NÃO</option>
              <option value="sim">SIM</option>
            </select>
            <input type="submit" name="btn_confirmar" value="Confirmar Escolha">
          </form>
        </div>
        <div class="">

        </div>
      </main>
  <?php
    if (isset($_POST['confirma'])) {
      if ($_POST['confirma'] == 'sim') {
        $_SESSION['operacao'] = 'encerrar';
        header("location: contagem.inc.php");
      } else {
        $_SESSION['resultado'] = "Contagem cancelada.";
        header("location: administrador.php");
      }
    }
  } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
?>
