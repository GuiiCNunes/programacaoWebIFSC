<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Bolsista</title>
  </head>
  <body>
    <form class="" action="inserir.php?funcao=cadastrar" method="post">
      <h3><b>Bem vindo a tela de cadastro</b></h3><br><br>
      Digite o nome do bolsista: <input type="text" name="nome" required><br>
      Digite o nome do projeto: <input type="text" name="projeto" required><br>
      Digite o nome do orientador: <input type="text" name="orientador" required><br>
      Digite a data de início: <input type="date" name="datainicio" required><br>
      Digite a data de termino: <input type="date" name="datatermino" required><br>
      Digite o valor da bolsa: <input type="text" name="valorbolsa" required><br><br>
      <input type="submit" name="btn_enviar" value="Cadastrar">
    </form>
  </body>
</html>
