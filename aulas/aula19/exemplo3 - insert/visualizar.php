<?php
  include("funcoes.php");

  $conexao = conectar("localhost","root","","supermercado");

  $consultaSQL ="SELECT * FROM pessoa order by idade desc";

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
        <td><center><b> Identificador</center></b></td>
        <td><center><b> Nome</center></b></td>
        <td><center><b> Idade</center></b></td>
      </tr>
      <?php while($resultado = mysqli_fetch_array($query)){ //COLOCA CONTEÚDO NA TABELA
        ?>
        <tr>
          <td><center><?php echo $resultado['idpessoa']; ?></center></td>
          <td><center><?php echo $resultado['nome']; ?></center></td>
          <td><center><?php echo $resultado['idade']; ?></center></td>
        </tr>
      <?php } //FECHA O WHILE
        desconectar($conexao);
      ?>
    </table>
    <br><br><br>

    <input type="button" name="btn_cadastrar" value="Voltar para a tela de cadastro" onclick="location.href = 'index.php'">

  </body>
</html>
