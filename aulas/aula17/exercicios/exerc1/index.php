<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 1</title>
  </head>
  <body>
    <!-- Criar um arquivo quadrado.inc.php que receberá um número e retornará o quadrado desse número.
    Deverá ser criando um arquivo index.php que receberá um numero digitado pelo usuário.
    Esse número deverá ser passado via POST para o arquivo processar.php que deverá incluir o arquivo quadrado.inc.php
    e chamar a função desse arquivo passando o parâmetro esperado. -->

    <form action="processar.php" method="post">
      <b>Qual número? </b> <input type="number" name="n1" required><br>
      <input type="submit" name="btn_enviar" value="Enviar">      
    </form>

  </body>
</html>
