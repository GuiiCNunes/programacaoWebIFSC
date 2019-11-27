<?php
  session_start();
  if ($_SESSION['user'] == 'administrador') {
    include("conexao.inc.php");
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $sql = "SELECT COUNT(codeleitor) AS contagem FROM eleitor where status = 'nao'";
    $contagemSemVoto = mysqli_query($conexao, $sql);
    while ($resultado = mysqli_fetch_array($contagemSemVoto)) {
      $quantidade = $resultado['contagem'];
    } ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Confirmar Fim da Eleição</title>
        <!-- Colocar fonte, estilo e revisar titulos de páginas -->
      </head>
      <body>
        <header>

        </header>
        <main>
          <div class="">
            <form class="" action="#" method="post">
              <h1>Tem certeza que deseja encerrar a eleição?</h1><br>
              Eleitores que ainda não votaram:<?= $quantidade; ?><br><br>
              <select class="" name="confirma">
                <option value="nao">NÃO</option>
                <option value="sim">SIM</option>
              </select>
              <input type="submit" name="btn_confirmar" value="Confirmar Escolha">
            </form>
          </div>
        </main>
        <footer></footer>
      </body>
    </html>
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
