<?php
  function conectar($local,$usuario,$senha,$banco) {
    $conexao = mysqli_connect($local,$usuario,$senha,$banco);
    return $conexao;

  }
?>
