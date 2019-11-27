<?php
  if(!isset($_SESSION)){ session_start(); }

    function conectar($local, $usuario, $senha, $base) {
      $conexao = mysqli_connect($local, $usuario, $senha, $base);
      if ($conexao == true) {
        return $conexao;
      } else {
        echo "Problema em conectar com a base.<br><br>";
      }
    }

    function desconectar($conexao) {
      if (mysqli_close($conexao) != true) {
        echo "Erro ao desconectar o banco de dados. <br><br>";
      }
    }
?>
