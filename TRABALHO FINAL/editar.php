<?php
  session_start();
  if ($_SESSION['user'] == "administrador") {
    if (isset($_GET['id'])) {
      include("layoutpag.php");
      include("conexao.inc.php");
      $conexao = conectar('localhost', 'root', '', 'eleicao');
      $id = $_GET['id'];
      $sql = "SELECT nome, cpf FROM eleitor where cod = '$id'";
      $query = mysqli_query($conexao, $sql);
      while ($resultado = mysqli_fetch_array($query)) {
        $nome = $resultado['nome'];
        $cpf = $resultado['cpf'];
      } ?>
      <main class="conteudo">
        <div class="titulo">
          <h1>Editar usuário</h1><br>
        </div>
        <div class="">
          <form class="" action="editar.inc.php" method="post">
            Nome: <input type="text" name="nome" required value="<?= $nome; ?>"><br>
            CPF: <input type="text" name="cpf" required placeholder="Apenas os 11 números" value="<?= $cpf; ?>" minlength="11" maxlength="11"><br>
            <input type="submit" name="btn_editarEleitor" value="Editar">
            <input type="hidden" name="id" value="<?= $id; ?>">
          </form>
        </div>
        <div class="">
          <input type="button" name="btn_voltar" value="Voltar" onclick="location.href='administrador.php'">
        </div>
      </main>
    <?php } else {
      header("location: administrador.php");
    }
  } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
?>
