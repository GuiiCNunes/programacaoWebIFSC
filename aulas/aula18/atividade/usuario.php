<?php
  session_start();
  include 'funcaoRedirecionar.inc.php';

  if (isset($_SESSION['usuario']) and isset($_SESSION['id'])) {
    if ($_SESSION['id'] == 3) {
      echo "<h1>Bem vindo Sr(a) ".$_SESSION['usuario']." a página do Usuário</h1><br><br>";
      if (isset($_SESSION['autorizacao'])) {
        echo $_SESSION['autorizacao']."------------------------------------------------------------------<br><br>";
        unset($_SESSION['autorizacao']);
      }

      echo "<h3> Já estão disponíveis no sistema as rotinas abaixo: <br><br></h3>";
      echo "- Inserir produtos; <br>- Consultar produtos; <br>- Alterar produtos; <br>- Apagar produtos; <br><br>";
    }
    else {
      $_SESSION['autorizacao'] = "Autorização inválida para esse conteúdo.";
      redirecionar($_SESSION['id']);
    }
  ?>
    <a href="sair.php">Sair</a><br><br>
<?php
  }
  else {
    $_SESSION['ErroLogin'] = 'Login, Senha ou Tipo inválidos.';
    header("location: index.php");
  }
?>
