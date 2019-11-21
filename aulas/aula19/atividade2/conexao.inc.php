<?php
  function conectar($local, $usuario, $senha, $base){
    $conexao = mysqli_connect($local, $usuario, $senha, $base);
    if ($conexao == true) {
      return $conexao;
    }
    else {
      echo "Não foi possível realizar a conexão com a base de dados.<br>";
    }
  }

  function desconectar($conexao){
    if (mysqli_close($conexao) != true) {
      echo "Erro ao desconectar o banco de dados. <br><br>";
    }
  }
?>
