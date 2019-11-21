<?php
  include('conexao.inc.php');
  $conexao = conectar("localhost","root","","supermercado");

  if ($_GET['funcao'] == 'editar') {
    $id = $_GET['id'];
    $consultaupdate = "SELECT * FROM pessoa where idpessoa = '$id'";
    $query = mysqli_query($conexao, $consultaupdate);

    while ($resultado = mysqli_fetch_array($query)) {
      $nome = $resultado['nome'];
      $idade = $resultado['idade'];
    }
  ?>

  <h3>Atualizar cadastro</h3><br><br>
  <form class="" action="funcoes.inc.php?funcao=editar&&id=<?= $id ?> " method="post">
    Nome: <input type="text" name="nome" value="<?= $nome ?>" required><br>
    Idade: <input type="text" name="idade" value="<?= $idade ?>" required><br><br>
    <input type="submit" name="btn_alterar" value="Alterar">
  </form>

<?php } ?>
