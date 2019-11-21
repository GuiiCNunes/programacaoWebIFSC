<?php 
  session_start();

  if (isset($_SESSION['user'])) {
    ?>
    <h3>Bem vindo, <?= $_SESSION['user']; ?> O que deseja fazer?</h3><br>
    <input type="button" name="btn_cadastrar" value="Cadastrar" onclick="location.href='cadastrar.php'">
    <input type="button" name="btn_ver_dados" value="Ver Dados" onclick="location.href='visualizar.php?funcao=visualizar'">
    <input type="button" name="btn_excluir" value="Excluir" onclick="location.href='visualizar.php?funcao=excluir'">
    <input type="button" name="btn_atualizar" value="Alterar" onclick="location.href='visualizar.php?funcao=atualizar'"><br><br>
    <input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'">
  <?php }
  else {
    $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
    header("location: index.php");
  }
