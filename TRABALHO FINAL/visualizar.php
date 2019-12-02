<?php
  session_start();
  if ($_SESSION['user'] == 'administrador') {
    include("layoutpag.php");
    include("conexao.inc.php");
    include("criartabela.inc.php");
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $sql = "SELECT cod, nome, cpf, status FROM eleitor"; // Colocar alguma ordenação?
    $query = mysqli_query($conexao, $sql); ?>
        <main class="conteudo"> <div class="tabela">
          <?php
          if ($_GET['acao'] == "editar") {
            tabela($query,"editar");
            desconectar($conexao);
          } elseif ($_GET['acao'] == "excluir") {
            tabela($query,"excluir");
            desconectar($conexao);
          } elseif ($_GET['acao'] == "visualizar") {
            tabela($query,"visualizar");
            desconectar($conexao);
          } else {
            header("location: administrador.php");
          } ?>
        </div>
      <div class="botao">
        <input type="button" name="btn_voltar" value="Voltar" onclick="location.href='administrador.php'">
      </div> </main>
  <?php } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
?>
