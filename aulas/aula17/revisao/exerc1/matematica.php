<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 1</title>
  </head>
  <body>
    <?php echo "<h1>Olá Sr(a). ".$_POST['nome']." seja bem vindo!</h1><br><br><br>"; ?>
    <h3>Vamos começar!!</h3><br><br>

    <form action="calcular.php" method="post">
      <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>"> <!-- Passando o nome para o calcular.php -->
      <b>1. Digite 3 números para serem ordenados:</b><br>
      1: <input type="text" name="n1" required> 2: <input type="text" name="n2" required> 3: <input type="text" name="n3" required> <br>
      <input type="radio" name="fazer1" value="crescente" required>Crescente <input type="radio" name="fazer1" value="decrescente"> Decrescente <br><br>

      <b>2. Escolha os números que deseja e depois a operação que quer:</b><br>
      <?php for ($i=2; $i <= 10; $i=$i+2) { ?>
        <input type="checkbox" name="numeros[]" value="<?php echo $i; ?>"><?php echo $i; ?>
      <?php } ?><br>
      <input type="checkbox" name="operacao[]" value="Soma"> Soma
      <input type="checkbox" name="operacao[]" value="Subtração"> Subtração
      <input type="checkbox" name="operacao[]" value="Divisão"> Divisão
      <input type="checkbox" name="operacao[]" value="Multiplicação"> Multiplicação
      <br><br>
      <input type="submit" name="btn_enviar" value="Enviar">
    </form>
  </body>
</html>
