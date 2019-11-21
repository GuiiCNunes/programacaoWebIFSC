<?php
  include('conexao.inc.php');

  $conexao = conectar("localhost", "root", "","universidade");

  $inserirnome = $_POST['nome'];
  $inserirmatricula = $_POST['matricula'];
  $inserirendereco = $_POST['endereco'];
  $inserirtelefone = $_POST['telefone'];
  $inserirdatanasc = $_POST['datanasc'];
  $inseriremail = $_POST['email'];

  $comando = "INSERT INTO aluno (nome, matricula, endereco, telefone, datanascimento, email) values('$inserirnome', '$inserirmatricula', '$inserirendereco', '$inserirtelefone', '$inserirdatanasc', '$inseriremail')";

  if ($_GET['funcao'] == cadastrar) {
    $executar = mysqli_query($conexao,$comando);
    desconectar($conexao);
    header("location: visualizar.php");
  }
?>
