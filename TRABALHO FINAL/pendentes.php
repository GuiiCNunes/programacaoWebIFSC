<?php
  session_start();
  if ($_SESSION['user'] == 'administrador') {
    include("conexao.inc.php");
    include("criartabela.inc.php");
    $conexao = conectar('localhost', 'root', '', 'eleicao');
    $sql = "SELECT codeleitor, nome, cpf, status FROM eleitor where cpf = ''";
    $query = mysqli_query($conexao, $sql); ?> <main><div class="">
      <?php tabela($query, 'editar'); desconectar($conexao); ?>
    </div>
    </main>
  <?php } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
 ?>
