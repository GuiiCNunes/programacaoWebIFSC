<?php
  include('conexao.inc.php');
  $conexao = conectar("localhost","root","","aula");

  if ($_GET['funcao'] == 'editar') {
    $id = $_GET['id'];
    $consultaupdate = "SELECT * FROM conteudo where idconteudo = '$id'";
    $query = mysqli_query($conexao, $consultaupdate);

    while ($resultado = mysqli_fetch_array($query)) {
      $titulo = $resultado['titulo'];
      $duracao = $resultado['duracao'];
      $observacao = $resultado['observacao'];
    }
  ?>

  <h3>Atualizar cadastro</h3><br><br>
  <form class="" action="funcoes.inc.php?funcao=editar&&id=<?= $id ?> " method="post">
    Título: <input type="text" name="titulo" value="<?= $titulo ?>" required><br>
    Duração: <input type="number" name="duracao" value="<?= $duracao ?>" required><br>
    Observação: <input type="text" name="observacao" value="<?= $observacao ?>"><br><br>
    <input type="submit" name="btn_alterar" value="Alterar">
  </form>

<?php } ?>
