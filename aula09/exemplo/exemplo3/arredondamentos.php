<?php 
	$n1 = $_POST['n1'];

	echo "<h2> Trabalhando com Arredondamentos</h2> <br> <br>";
	echo " 1 tipo - Arredondamento especificando a casa decimal - round <br><br>";
	echo "O número é: $n1<br>";
	echo "Arredondamento com duas casas ".(round($n1,2))."<br><br>";

	echo " 2 tipo - Arredondamento para mais - ceil <br><br>";
	echo "Arredondamento com duas casas ".(ceil($n1))."<br><br>";
	
	echo " 3 tipo - Arredondamento para menos - floor <br><br>";
	echo "Arredondamento com duas casas ".(floor($n1))."<br><br>";
?>