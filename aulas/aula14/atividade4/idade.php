<?php
    if (isset($_POST['nome1'])) { //if + isset: só aparece se a variável tiver um valor
      $idades[$_POST['nome1']]=$_POST['idade1'];
      $idades[$_POST['nome2']]=$_POST['idade2'];//Criar vetor com os dados do form

      echo "<b>Menores de 18: </b> <br>"; //Menores de 18
      $contador = 0; //Contator para verificar se não existe
      foreach ($idades as $nome => $idade) {
        if ($idade < 18) {
          echo "Nome: $nome <br> Idade: $idade <br><br>";
          $contador++;
        }
      }
      if ($contador == 0) {
        echo "Não há menores de 18 anos.<br><br>";
      }
      echo "<br>";
      $maisvelho = 0; //Variável para pegar maior idade.
      foreach ($idades as $nomes => $idade) { //Determinar quem é o mais velho
        if ($idade > $maisvelho) {
          $maisvelho=$idade;
        }
      }
      echo "<b>O(s) mais velho(s) é(são):</b> <br><br>";
      foreach ($idades as $nome => $idade) { //Pegar quem são os mais velhos
        if ($idade == $maisvelho) {
          echo "$nome Idade: $idade<br><br>";
        }
      }
    }

    echo "Imprimindo a informações em forma tabular<br><br>";
?>
<table border="2">
  <tr><!-- Cabeçalho -->
    <td bgcolor="#FFFF00"><center><b>Nome</b></center></td>
    <td bgcolor="#FFFF00"><center><b>Idade</b></center></td>
  </tr>
    <?php foreach ($idades as $nome => $idade) {
    ?> <!-- Fechar o PHP para enxertar -->
    <tr>
      <td bgcolor="#A4A4A4"> <center><?php echo $nome; ?></center></td> <!-- Mostrar o nome e depois idade -->
      <td bgcolor="#A4A4A4"> <center><?php echo $idade; ?></center></td>
    </tr>
    <?php } ?>
</table>
