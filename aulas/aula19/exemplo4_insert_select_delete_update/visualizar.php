<?php
  include("conexao.inc.php");

  $conexao = conectar("localhost","root","","aula");

  $consultaSQL ="SELECT * FROM conteudo";

  $query = mysqli_query($conexao, $consultaSQL);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dados da Tabela Conteúdo</title>
  </head>
  <body>
    <h3><b>Dados da tabela conteúdo</b> </h3><br><br>
    <table border="1">
      <tr>
        <td><center></b>Identificador</center></b></td>
        <td><center></b>Título</center></b></td>
        <td><center></b>Duração</center></b></td>
        <td><center></b>Observação</center></b></td>
        <td><center><b>Editar</center></b></td>
        <td><center><b>Excluir</center></b></td>
      </tr>
      <?php while($resultado = mysqli_fetch_array($query)){ //COLOCA CONTEÚDO NA TABELA
        $id = $resultado['idconteudo'];
        ?>
        <tr>
          <td><center><b></b><?php echo $resultado['idconteudo']; ?></center></td>
          <td><center><b></b><?php echo $resultado['titulo']; ?></center></td>
          <td><center><b></b><?php echo $resultado['duracao']; ?></center></td>
          <td><center><b></b><?php echo $resultado['observacao']; ?></center></td>
          <td><center><a href="editar.php?funcao=editar&&id=<?php echo $id; ?>">Editar</a></center></td>
          <td><center><a href="funcoes.inc.php?funcao=excluir&&id=<?php echo $id; ?>">Excluir</a></center></td>
        </tr>
      <?php } //FECHA O WHILE
        desconectar($conexao);
      ?>
    </table>
    <br><br><br>

    <input type="button" name="btn_cadastrar" value="Voltar para a tela de cadastro" onclick="location.href = 'index.php'">

  </body>
</html>
