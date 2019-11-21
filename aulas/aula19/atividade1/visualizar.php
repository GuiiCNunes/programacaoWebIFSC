<?php
  include("funcoes.inc.php");

  $conexao = conectar("localhost","root","","pesquisa");

  $consultaSQL ="SELECT * FROM bolsista";

  $query = mysqli_query($conexao, $consultaSQL);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dados dos Bolsistas</title>
  </head>
  <body>
    <h3><b>Dados dos bolsistas</b> </h3><br><br>
    <table border="1">
      <tr>
        <td><center><b> Identificador</center></b></td>
        <td><center><b> Nome</center></b></td>
        <td><center><b> Projeto</center></b></td>
        <td><center><b> Orientador</center></b></td>
        <td><center><b> Data Inicio</center></b></td>
        <td><center><b> Data Termino</center></b></td>
        <td><center><b> Valor da bolsa</center></b></td>
      </tr>
      <?php while($resultado = mysqli_fetch_array($query)){ //COLOCA CONTEÚDO NA TABELA
        ?>
        <tr>
          <td><center><?php echo $resultado['idbolsista']; ?></center></td>
          <td><center><?php echo $resultado['nome']; ?></center></td>
          <td><center><?php echo $resultado['NomeProjeto']; ?></center></td>
          <td><center><?php echo $resultado['NomeOrientador']; ?></center></td>
          <td><center><?php echo date('d/m/Y', strtotime($resultado['DataInicio'])); ?></center></td>
          <td><center><?php echo date('d/m/y', strtotime($resultado['DataTermino'])); ?></center></td>
          <td><center><?php echo $resultado['ValorBolsa']; ?></center></td>
        </tr>
      <?php } //FECHA O WHILE
        desconectar($conexao);
      ?>
    </table>
    <br><br><br>

    <input type="button" name="btn_cadastrar" value="Voltar para a tela de cadastro" onclick="location.href = 'index.php'">

  </body>
</html>
