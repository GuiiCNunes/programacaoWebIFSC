<?php 
include ("conexao.php");
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

$consultaSQL = 'CREATE DATABASE IF NOT EXISTS aula';

if (mysqli_query($conexao,$consultaSQL)) {
	echo "Base de dados aula criada com sucesso <br>";
}

else {
	echo "Não foi possivel criar a Base de dados aula <br>";

}

desconectar($conexao);

 // criando Tabela
$local = "localhost";
$usuario = "root";
$senha = "";
$banco = "aula";

$conexao = conectar($local,$usuario,$senha,$banco);

$consultaSQL = 'CREATE TABLE IF NOT EXISTS conteudo (idconteudo int primary key auto_increment, titulo varchar(50) not null, duracao int not null, observacao varchar (500) )';

if (mysqli_query($conexao,$consultaSQL)) {
	echo "Tabela conteudo criada com sucesso <br>";
}

else {
	echo "Não foi possivel criar a tabela conteudo <br>";
}

desconectar($conexao);
 ?>