<?php 
	if (isset($_POST['esportes'])) {
		echo "O(s) esporte(s) de sua preferência são:<br>";
		foreach ($_POST['esportes'] as $esportes) {
			echo "- ". $esportes . "<br>";
		}
	}
	else {
		echo "Você não marcou nenhum esporte.<br>";
	}

	if (isset($_POST['news'])) {
		echo "Obrigado, você receberá em breve nossas novidades por e-mail<br><br>";
	}
	else {
		echo "Você não aceitou receber nossas novidades por e-mail, caso mude de ideia estaremos a disposição. Muito Obrigado!";
	}
?>