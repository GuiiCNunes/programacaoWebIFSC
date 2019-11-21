<?php
include ("conexao2.php");
//Criando Base de dados
$local = "localhost";
$usuario = "root";
$senha = "";
$banco = "";

$conexao = conectar($local,$usuario,$senha,$banco);

if ($conexao == true) {
	echo "conexao realizada com sucesso <br>";
}

else {
	echo "Não foi possível realizar a conexão <br>";
}

$consultaSQL = 'CREATE DATABASE IF NOT EXISTS supermercado';

if (mysqli_query($conexao,$consultaSQL)) {
	echo "Base de dados supermercado criada com sucesso <br>";
}

else {
	echo "Não foi possivel criar a Base de dados supermercado <br>";

}

desconectar($conexao);

 // criando Tabela
$local = "localhost";
$usuario = "root";
$senha = "";
$banco = "supermercado";

$conexao = conectar($local,$usuario,$senha,$banco);

$consultaSQL = 'CREATE TABLE IF NOT EXISTS pessoa (idpessoa int primary key auto_increment, nome varchar(50) not null, idade int not null)';

if (mysqli_query($conexao,$consultaSQL)) {
	echo "Tabela pessoa criada com sucesso <br>";
}

else {
	echo "Não foi possivel criar a tabela pessoa <br>";
}

desconectar($conexao);
 ?>
