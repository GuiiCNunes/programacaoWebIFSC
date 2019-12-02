<?php
  session_start();
  if ($_SESSION['user'] == "administrador") {
    include("layoutpag.php");
    include("conexao.inc.php");
    $id = $_GET['id'];
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $sql = "SELECT nome, cpf FROM eleitor where cod = '$id'";
    $query = mysqli_query($conexao, $sql);
    while($resultado = mysqli_fetch_array($query)){
      $nome = $resultado['nome'];
      $cpf = $resultado['cpf'];
    } ?>
      <main class="conteudo">
        <div class="titulo">
          <h3>Você tem certeza que deseja excluir o eleitor:</h3><br>
        </div>
        <div class="excluido">
        <form class="" action="#" method="post">
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
        </div>
        <div class="">
        </div>
      </main>
  <?php
    if (isset($_POST['escolha'])) {
      $escolha = $_POST['escolha'];
      if ($escolha == 'sim') {
        $deletar = "DELETE FROM eleitor where cod = '$id'";
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
