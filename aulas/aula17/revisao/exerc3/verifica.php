<?php
  include("verificaidade.inc.php");
  include("verificasalario.inc.php");

  $pessoa[$_POST['nome1']]["idade"] = $_POST['idade1'];
  $pessoa[$_POST['nome1']]["salario"] = $_POST['salario1'];
  $pessoa[$_POST['nome2']]["idade"] = $_POST['idade2'];
  $pessoa[$_POST['nome2']]["salario"] = $_POST['salario2'];
  $pessoa[$_POST['nome3']]["idade"] = $_POST['idade3'];
  $pessoa[$_POST['nome3']]["salario"] = $_POST['salario3'];

  foreach($pessoa as $nome => $informacoes){
      foreach($informacoes as $chave => $valor){
        if ($valor == maioridade($_POST['idade1'],$_POST['idade2'],$_POST['idade3']) and $chave == "idade") {
          echo "A maior idade é de $nome com idade de $valor <br>";
        }
        if ($valor == maiorsalario($_POST['salario1'],$_POST['salario2'],$_POST['salario3']) and $chave == "salario") {
          echo "O maior salário é de $nome com salário de R$ ".number_format($valor,2,",",".")."<br>";
        }
    }
  }
?>
