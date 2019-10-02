<?php
if (isset($_POST['matricula1'])) {
  $salarios[$_POST['matricula1']] = $_POST['salario1'];
  $salarios[$_POST['matricula2']] = $_POST['salario2'];
  $salarios[$_POST['matricula3']] = $_POST['salario3'];
  $cont = 0;

  foreach ($salarios as $indice => $valor) {
    if ($valor < 998) {
    echo "Matrícula: ".$indice."<br>Salário: ".number_format($valor,2,",",".")."<br>";
    $cont++;
    }
  }
  if ($cont == 0) {
    echo "Nenhum salário é menor que R$ 998,00.";
  }
 }
?>
