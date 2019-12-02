<?php
  if (!isset($_SESSION)){ session_start(); }
  if ($_SESSION['user'] == 'administrador') {
    function tabela($query, $tipo) { ?>
      <table>
        <tr>
          <th>Identificador</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>Status</th> <!-- Coloco? -->
          <?php if($tipo == 'editar') {?> <th>Editar</th> <?php } ?>
          <?php if($tipo == 'excluir') {?> <th>Excluir</th> <?php } ?>
        </tr>
        <?php while($resultado = mysqli_fetch_array($query)) {
          $id = $resultado['cod']; ?>
          <tr>
            <td><?= $resultado['cod']; ?></td>
            <td><?= $resultado['nome']; ?></td>
            <td><?= $resultado['cpf']; ?></td>
            <td><?= $resultado['status']; ?></td>
            <?php if($tipo == 'editar') {?> <td><input type="button" name="btn_editarEleitor" value="Editar" onclick="location.href='editar.php?id=<?= $id; ?>'" class="editar"></td> <?php } ?>
            <?php if($tipo == 'excluir') {?> <td><input type="button" name="btn_excluirEleitor" value="Excluir" onclick="location.href='excluir.php?id=<?= $id; ?>'" class="excluir"></td> <?php } ?>
          </tr>
        <?php } ?>  </table>
    <?php }
  } else {
    $_SESSION['ErroRestrito'] = "Essa é uma área restrita, você precisa estar logado como administrador.";
    header("location: login.php");
  }
?>
