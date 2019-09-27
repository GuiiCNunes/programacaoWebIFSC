<?php 
	if (isset($_POST['cidades'])) {
		echo "A cidade escolhida foi: ".$_POST['cidades'];
	}
	else {
		echo "Por favor, selecione uma cidade";
	}
?>