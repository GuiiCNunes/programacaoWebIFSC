<?php
  session_start();
  if ($_SESSION['user'] == "administrador") {
    include("conexao.inc.php");
    $id = $_GET['id'];
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $sql = "SELECT nome, cpf FROM eleitor where codeleitor = '$id'";
    $query = mysqli_query($conexao, $sql);
    while($resultado = mysqli_fetch_array($query)){
      $nome = $resultado['nome'];
      $cpf = $resultado['cpf'];
    } ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Confirmação de Exclusão</title>
        <!-- Colocar fonte, estilo e revisar titulos de páginas -->
      </head>
      <body>
        <header> <!-- Coloco? -->

        </header>
        <main>
          <form class="" action="#" method="post">
            <h3>Você tem certeza que deseja excluir o eleitor:</h3><br>
            <ul>
              <li>Nome: <?= $nome; ?></li>
              <li>CPF: <?= $cpf; ?></li>
            </ul>
            <select class="" name="escolha">
              <option value="nao">Não</option>
              <option value="sim">SIM</option>
            </select>
            <input type="submit" name="btn_confirmarEscolha" value="Confirmar Escolha">
          </form>
        </main>
        <footer></footer> <!-- Coloco? -->
      </body>
    </html>
  <?php
    if (isset($_POST['escolha'])) {
      $escolha = $_POST['escolha'];
      if ($escolha == 'sim') {
        $deletar = "DELETE FROM eleitor where codeleitor = '$id'";
        if (mysqli_query($conexao, $deletar) == TRUE) {
          desconectar($conexao);
          $_SESSION['resultado'] = "Eleitor excluído com sucesso!";
          header("location: administrador.php");
        } else {
          desconectar($conexao);
          $_SESSION['resultado'] = "NÃO FOI POSSÍVEL EXCLUIR O ELEITOR!";
          header("location: administrador.php");
        }
      } else {
        desconectar($conexao);
        $_SESSION['resultado'] = "Cancelou exclusão";
        header("location: administrador.php");
      }
    }
  } else {
    $_SESSION['ErroRestrito'] = "Você precisa ter credenciais válidas.";
    header("location: index.php");
  }
?>
