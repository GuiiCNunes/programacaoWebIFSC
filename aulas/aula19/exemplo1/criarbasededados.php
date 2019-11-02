<?php

  $conexao = mysqli_connect("localhost","root","","");

  if ($conexao == true) {
    echo "Você está conectado ao MySQL <br><br>";
  }
  else {
    echo "Erro na conexão com o servidor mysql";
  }

  $consultaSQL = 'CREATE DATABASE IF NOT EXISTS supermercado'; // Criar a database supermercado, se ela não existir.

  if (mysqli_query($conexao, $consultaSQL)) { //Variáveis tem que ser nessa ordem 1º conexão e depois consulta
    echo "Base de dados supermercado criada com sucesso";
  }
  else {
    echo "Erro ao criar base de dados supermercado";
  }
?>
