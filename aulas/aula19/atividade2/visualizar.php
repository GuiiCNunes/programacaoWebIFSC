<?php
    include('conexao.inc.php');
    $conexao = conectar("localhost","root","","universidade");

    header('Content-Type: Text/html; charset=ISO-8859-1'); //Corigir o Charset da tabela, quando os dados são inseridor fora do php.

    $consultaSQL = "SELECT * from aluno";

    $query = mysqli_query($conexao, $consultaSQL);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro alunos</title>
  </head>
  <body>
    <table border="3">
      <tr>
        <td><b><center>Identificador</center></b></td>
        <td><b><center>Nome</center></b></td>
        <td><b><center>Matricula</center></b></td>
        <td><b><center>Endereço</center></b></td>
        <td><b><center>Telefone</center></b></td>
        <td><b><center>Data de Nascimento</center></b></td>
        <td><b><center>E-mail</center></b></td>
      </tr>
      <?php while($resultado = mysqli_fetch_array($query)){ ?>
        <tr>
          <td><center><?php echo $resultado['idaluno']; ?></center></td>
          <td><center><?php echo $resultado['nome']; ?></center></td>
          <td><center><?php echo $resultado['matricula']; ?></center></td>
          <td><center><?php echo $resultado['endereco']; ?></center></td>
          <td><center><?php echo $resultado['telefone']; ?></center></td>
          <td><center><?php echo date('d/m/Y', strtotime($resultado['datanascimento'])); ?></center></td>
          <td><center><?php echo $resultado['email']; ?></center></td>
        </tr>
      <?php }
        desconectar($conexao);
      ?>
    </table><br><br>
    <input type="button" name="btn_voltar" value="Voltar ao Cadastro" onclick="location.href='index.php'">
  </body>
</html>
