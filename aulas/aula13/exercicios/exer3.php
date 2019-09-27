<?php 
	for ($i=1; $i <= 10; $i++) { 
		$n=1;
		do {
			echo "$i * $n = ".($n*$i)."<br>";
			$n++;
		} while ($n <= 10);
		echo "<br>";
	}
?>