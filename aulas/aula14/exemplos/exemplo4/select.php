<?php 	
	if ($_POST['processador'] != "") {
		echo "O processador escolhido foi: ".$_POST['processador']."<br>";
	}
	else {
		echo "Você não selecionou nenhum processador <br>";
	}

	if (isset($_POST['livros'])) {
		echo "<b> Livro(s) selecionado(s) para a compra: </b><br>";

		foreach ($_POST['livros'] as $livros) {
			echo "- ".$livros."<br>";
		}
	}
	else {
		echo "Você não selecionou nenhum livro para a compra <br>";
	}

?>