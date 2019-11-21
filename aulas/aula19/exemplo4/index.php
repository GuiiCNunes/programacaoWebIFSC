<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Pessoas</title>
  </head>
  <body>
    <form class="" action="inserir.php?funcao=cadastrar" method="post">
      <h3><b>Bem vindo a tela de cadastro</b></h3><br><br>
      Digite o Título: <input type="text" name="titulo" required><br>
      Digite a duração: <input type="number" name="duracao" required><br>
      Digite, se necessário, a observação: <input type="text" name="observacao"><br><br>
      <input type="submit" name="btn_enviar" value="Cadastrar">
    </form>
  </body>
</html>
