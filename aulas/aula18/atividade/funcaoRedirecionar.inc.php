<?php
  function redirecionar($tipo){
    switch ($tipo) {
      case '1':
        header("location: administrador.php");
        break;
      case '2':
        header("location: desenvolvedor.php");
        break;
      case '3':
        header("location: usuario.php");
        break;
    }
  }
?>
