<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro Alunos</title>
  </head>
  <body>
    <form class="" action="inserir.php?funcao=cadastrar" method="post">
      <h3>Cadastro de Alunos</h3><br><br>
      Digite o nome: <input type="text" name="nome" required><br>
      Matricula: <input type="text" name="matricula" required placeholder="Mátricula com 12 números." maxlength="12" minlenght="12"><br>
      Endereço: <input type="text" name="endereco" required><br>
      Telefone: <input type="text" name="telefone" required placeholder="Formato: (00)00000-0000."><br>
      Data de nascimento: <input type="date" name="datanasc" required><br>
      E-mail: <input type="email" name="email" required><br><br>
      <input type="submit" name="btn_cadastrar" value="Cadastrar">
    </form>

  </body>
</html>
