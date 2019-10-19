<?php 
	$historicos[$_POST['nome1']]["Matemática"] = $_POST['mtm1'];
	$historicos[$_POST['nome1']]["Português"] = $_POST['pt1'];
	$historicos[$_POST['nome1']]["Biologia"] = $_POST['bio1'];
	$historicos[$_POST['nome2']]["Matemática"] = $_POST['mtm2'];
	$historicos[$_POST['nome2']]["Português"] = $_POST['pt2'];
	$historicos[$_POST['nome2']]["Biologia"] = $_POST['bio2'];
	$historicos[$_POST['nome3']]["Matemática"] = $_POST['mtm3'];
	$historicos[$_POST['nome3']]["Português"] = $_POST['pt3'];
	$historicos[$_POST['nome3']]["Biologia"] = $_POST['bio3'];

	foreach ($historicos as $nome => $value) {
		$somatorio = 0.0;
		echo "Notas do aluno $nome: <br>";
		foreach ($value as $disciplina => $nota) {
			echo "$disciplina : ".number_format($nota,2,",",".")."<br>";
			$somatorio += $nota;
		}
		echo "Média Geral : ".number_format(($somatorio/3),2,",",".")."<br><br>";
	}
?>