<?php
  session_start();

  if (isset($_SESSION['user'])) {
    include("conexao.inc.php");

    $conexao = conectar("localhost","root","","supermercado");

    $consultaSQL ="SELECT * FROM pessoa order by idpessoa";

    $query = mysqli_query($conexao, $consultaSQL);
  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Dados da Tabela Pessoa</title>
    </head>
    <body>
      <h3><b>Dados da tabela pessoa</b> </h3><br><br>
      <table border="1">
        <tr>
          <td><center><b>Identificador</center></b></td>
          <td><center><b>Nome</center></b></td>
          <td><center><b>Idade</center></b></td>
          <?php if($_GET['funcao'] == "atualizar") { ?><td><center><b>Editar</center></b></td>
          <?php } elseif ($_GET['funcao'] == "excluir") { ?><td><center><b>Excluir</center></b></td>
          <?php } ?>
        </tr>
        <?php while($resultado = mysqli_fetch_array($query)){ //COLOCA CONTEÚDO NA TABELA
            $id = $resultado['idpessoa']; //Guarda a ID que esta o while para editar ou excluir
          ?>
          <tr>
            <td><center><?php echo $resultado['idpessoa']; ?></center></td>
            <td><center><?php echo $resultado['nome']; ?></center></td>
            <td><center><?php echo $resultado['idade']; ?></center></td> <!-- Proximos passam o tipo da funcao e o id de quem será realizada -->
            <?php if($_GET['funcao'] == "atualizar") { ?><td><center><a href="editar.php?funcao=editar&&id=<?php echo $id; ?>">Editar</a></center></td> <!-- Cria o campo editar na tabela -->
          <?php } elseif ($_GET['funcao'] == "excluir") { ?><td><center><a href="excluir.php?funcao=excluir&&id=<?php echo $id; ?>">Excluir</a></center></td> <!-- Cria o campo excluir na tabela -->
        <?php } ?>
          </tr>
        <?php } //FECHA O WHILE
          desconectar($conexao);
        ?>
      </table>
      <br><br><br>

      <input type="button" name="btn_cadastrar" value="Voltar para a tela de opções" onclick="location.href = 'restrito.php'">
      <input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'">

    </body>
  </html>
<?php
  }
  else {
    $_SESSION['ErroLogin'] = 'Login e/ou Senha inválidos.';
    header("location: index.php");
  }
