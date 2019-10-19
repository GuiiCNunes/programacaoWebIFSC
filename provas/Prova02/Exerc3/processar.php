<?php 
	echo "<h2>".$_POST['nome']."</h2><br><br><br>";

	if (isset($_POST['afinidades'])) {
		$afinidades = $_POST['afinidades'];
		echo "Curso(s) que recomendamos com base na sua afinidade(s): <br><br>";
		foreach ($afinidades as $valor) {
			switch ($valor) {
				case 'Matemática':
					echo "→ Você poderia fazer uma faculdade de Engenharia ou Matemática<br>";
					break;
				case 'Química':
					echo "→ Você poderia fazer uma faculdade de Química ou Farmácia<br>";
					break;
				case 'Biologia':
					echo "→ Você poderia fazer uma faculdade de Biologia ou Agronomia<br>";
					break;
				case 'Lógica':
					echo "→ Você poderia fazer Ciência da Computação ou Sistemas de Informação<br>";
					break;
				default:
					echo "→ Você poderia fazer uma faculdade de Medicina ou Enfermagem<br>";
					break;
			}
		}
	}
	else {
		echo "Você não selecionou nenhum conteúdo de preferência.";
	}
?>