<?php
  if (!isset($_SESSION)){ session_start(); }
  if ($_SESSION['user'] == 'administrador') {
    function tabela($query, $tipo) { ?>
      <table>
        <tr>
          <td>Identificador</td>
          <td>Nome</td>
          <td>CPF</td>
          <td>Status</td> <!-- Coloco? -->
          <?php if($tipo == 'editar') {?> <td>Editar</td> <?php } ?>
          <?php if($tipo == 'excluir') {?> <td>Excluir</td> <?php } ?>
        </tr>
        <?php while($resultado = mysqli_fetch_array($query)) {
          $id = $resultado['codeleitor']; ?>
          <tr>
            <td><?= $resultado['codeleitor']; ?></td>
            <td><?= $resultado['nome']; ?></td>
            <td><?= $resultado['cpf']; ?></td>
            <td><?= $resultado['status']; ?></td>
            <?php if($tipo == 'editar') {?> <td><input type="button" name="btn_editarEleitor" value="Editar" onclick="location.href='editar.php?id=<?= $id; ?>'"></td> <?php } ?>
            <?php if($tipo == 'excluir') {?> <td><input type="button" name="btn_excluirEleitor" value="Excluir" onclick="location.href='excluir.php?id=<?= $id; ?>'"></td> <?php } ?>
          </tr>
        <?php } ?>  </table>
    <?php }
  } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
?>
