<?php
  include("funcoes.inc.php");

  $conexao = conectar("localhost","root","","pesquisa");

  $inserirnome = trim($_POST['nome']);
  $inserirprojeto = trim($_POST['projeto']);
  $inserirorientador = trim($_POST['orientador']);
  $inserirdatainicio = trim($_POST['datainicio']);
  $inserirdatatermino = trim($_POST['datatermino']);
  $inserirvalorbolsa = trim($_POST['valorbolsa']);

  $consulta = "INSERT INTO bolsista (nome,NomeProjeto,NomeOrientador,DataInicio,DataTermino,ValorBolsa) values ('$inserirnome', '$inserirprojeto', '$inserirorientador', '$inserirdatainicio','$inserirdatatermino', '$inserirvalorbolsa')";

  if ($_GET['funcao'] == cadastrar) {
    $executar = mysqli_query($conexao, $consulta);
    desconectar($conexao);
    header("location: visualizar.php");
  }

?>
