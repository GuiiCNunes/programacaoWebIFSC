<?php

  $conexao = mysqli_connect("localhost","root","","");

  $consultaSQL = 'CREATE TABLE IF NOT EXISTS pessoa(idpessoa int primary key auto_increment, nome varchar(50) not null, idade int not null)'; //Cria a tabela e dentro dela os tributos
  $executaconsulta = mysqli_query($conexao,$consultaSQL);

  if ($executaconsulta == true) {
    echo "Tabela pessoa criada com sucesso";
  }
  else {
    echo "Não foi possível criar a tabela";
  }
?>
