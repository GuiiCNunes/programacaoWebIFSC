<?php
  session_start();
  if ($_SESSION['user'] == "administrador") {
    if (isset($_GET['id'])) {
      include("conexao.inc.php");
      $conexao = conectar('localhost', 'root', '', 'eleicao');
      $id = $_GET['id'];
      $sql = "SELECT nome, cpf FROM eleitor where codeleitor = '$id'";
      $query = mysqli_query($conexao, $sql);
      while ($resultado = mysqli_fetch_array($query)) {
        $nome = $resultado['nome'];
        $cpf = $resultado['cpf'];
      } ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>Editar Eleitor</title>
          <!-- Colocar fonte, estilo e revisar titulos de páginas -->
        </head>
        <body>
          <header>

          </header>
          <main>
            <div class="">
              <form class="" action="editar.inc.php" method="post">
                Nome: <input type="text" name="nome" required value="<?= $nome; ?>"><br>
                CPF: <input type="number" name="cpf" required placeholder="Apenas os 11 números" value="<?= $cpf; ?>"><br>
                <input type="submit" name="btn_editarEleitor" value="Editar">
                <input type="button" name="btn_voltar" value="Voltar" onclick="location.href='administrador.php'">
                <input type="hidden" name="id" value="<?= $id; ?>">
              </form>
            </div>
          </main>
          <footer></footer>
        </body>
      </html>

    <?php } else {
      header("location: administrador.php");
    }
  } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
?>
