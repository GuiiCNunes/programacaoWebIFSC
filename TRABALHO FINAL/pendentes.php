<?php
  session_start();
  if ($_SESSION['user'] == 'administrador') {
    include("layoutpag.php");
    include("conexao.inc.php");
    include("criartabela.inc.php");
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $sql = "SELECT cod, nome, cpf, status FROM eleitor where cpf = ''";
    $query = mysqli_query($conexao, $sql); ?>
      <main class="conteudo">
        <div class="topo">
          <h2>Eleitores Pendentes</h2>
        </div>
        <div class="tabela">
          <?php tabela($query, 'editar'); desconectar($conexao); ?>
        </div><div class="botao">
          <input type="button" name="btn_voltar" value="Voltar" onclick="location.href='administrador.php'">
        </div>
      </main>
  <?php } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
 ?>
