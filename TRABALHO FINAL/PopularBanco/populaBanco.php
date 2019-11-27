<?php 
	include ("conexao.inc.php");

	$conexao = conectar("localhost", "root", "", "eleicao");
	
	$fp = fopen("dados.txt", "r");
	$i = 0;

	while (!feof($fp)) {
		$linha = fgets($fp, 100);
		$nome = substr($linha, 0, 41);
		$cpf = substr($linha, 61,11);

		$sql = "INSERT INTO eleitor (nome,cpf,status,candidato) values ('$nome','$cpf','nao', '0')";

		$query = mysqli_query($conexao, $sql);
		$i++;

		echo "processando...",$i,"<br>";
	}

	fclose($fp);
	mysqli_close($conexao);
	echo "<br>concluido com sucesso";
?>