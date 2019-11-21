<?php
include ("conexao2.php");
//Criando Base de dados
$local = "localhost";
$usuario = "root";
$senha = "";
$banco = "";

$conexao = conectar($local,$usuario,$senha,$banco);

if ($conexao == true) {
	echo "Conexão realizada com sucesso <br>";
}

else {
	echo "Não foi possível realizar a conexão <br>";
}

$consultaSQL = 'CREATE DATABASE IF NOT EXISTS pesquisa';

if (mysqli_query($conexao,$consultaSQL)) {
	echo "Base de dados pesquisa criada com sucesso <br>";
}

else {
	echo "Não foi possivel criar a Base de dados pesquisa <br>";

}

desconectar($conexao);

 // criando Tabela
$local = "localhost";
$usuario = "root";
$senha = "";
$banco = "pesquisa";

$conexao = conectar($local,$usuario,$senha,$banco);

$consultaSQL = 'CREATE TABLE IF NOT EXISTS bolsista (idbolsista int primary key auto_increment, nome varchar(45), NomeProjeto varchar(45), NomeOrientador varchar(45), DataInicio DATE, DataTermino DATE, ValorBolsa DECIMAL(10,2))';

if (mysqli_query($conexao,$consultaSQL)) {
	echo "Tabela pessoa criada com sucesso <br>";
}

else {
	echo "Não foi possivel criar a tabela pessoa <br>";
}

desconectar($conexao);
 ?>
