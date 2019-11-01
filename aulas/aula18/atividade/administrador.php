<?php
  session_start();
  include 'funcaoRedirecionar.inc.php';

  if (isset($_SESSION['usuario']) and isset($_SESSION['id'])) {
    if ($_SESSION['id'] == 1) {
      echo "<h1>Bem vindo Sr(a) ".$_SESSION['usuario']." a página do Administrador</h1><br><br>";
      if (isset($_SESSION['autorizacao'])) {
        echo $_SESSION['autorizacao']."------------------------------------------------------------------<br><br>";
        unset($_SESSION['autorizacao']);
      }

      echo "<h3> Suas atividades para hoje são: <br><br></h3>";
      echo "- Otimização do Sistema Operacional; <br>- Configuração de um cluester para processamento paralelo; <br>- Treinamento de Estagiários; <br><br>";

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
