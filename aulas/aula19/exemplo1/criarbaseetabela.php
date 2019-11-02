<?php
  include('conexao.php');

  $local = "localhost";
  $usuario = "root";
  $senha = "";
  $banco = "";

  $conexao = conectar($local, $usuario, $senha, $banco);

  if ($conexao == true) {
    echo "Conexão realizada com sucesso.<br>";
  }
  else {
    echo "Não foi possível realizar a conexão.<br>";
  }

  $consultaSQL = 'CREATE DATABASE IF NOT EXISTS aula';

  if (mysqli_query($conexao, $consultaSQL)) {
    echo "Base de dados aluno criada com sucesso. <br>";
  }
  else {
    echo "Não foi possível criar a base de dados aluno";
  }

?>
