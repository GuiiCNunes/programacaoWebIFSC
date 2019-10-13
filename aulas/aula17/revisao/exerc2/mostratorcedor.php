<?php
  include("verifcatorcedores.inc.php");

  echo "O time escolhido foi: ".$_POST['time']." e o número de torcedores é: ".number_format(verificatime($_POST['time']),0,",",".");

?>
