<!DOCTYPE html>
<html>
<head>
	<title>Atividade aula 14</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$notas["Maria das Graças"]=6.5;
		$notas["Paulo de Almeida"]=7.8;
		$notas["Rogério da Silva"]=4.2;
		$notas["Jerusa Fontes"]=8.5;
		$notas["Alícia Marques"]=9.0;
		$notas["Zenon Mendes"]=4.1;

		/*echo "<pre>";
		print_r($notas);
		echo "</pre>";*/
	?>
	<form method="POST" action="index.php">
		<b>Selecione um aluno:</b><br>
		<select name=aluno>
			<?php foreach ($notas as $indice => $valor) { ?>
			<option value="<?php echo $indice ?>"><?php echo "$indice" ?></option>
			<?php
				} 
			?>
		</select><br>
		<b>O que deseja fazer: </b><br>
		<input type="radio" name="fazer" value="acao1">Mostrar a nota do aluno selecionado <br>
		<input type="radio" name="fazer" value="acao2">Mostrar alunos (ordem descrescente) e notas <br>
		<input type="radio" name="fazer" value="acao3">Mostrar alunos (ordem decrescente de notas) <br>
		<input type="radio" name="fazer" value="acao4">Mostrar a média das notas <br>
		<input type="radio" name="fazer" value="acao5">Mostrar a quantidade de notas maiores que a média(6) <br>
		<input type="radio" name="fazer" value="acao6">Mostrar a menor nota e o nome do aluno <br>

		<br>Para verificar se o aluno esta cadastrado basta digitar o seu nome e clicar em enviar: <input type="text" name="nome"><br><br><br>

		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_limpar" value="Apagar">
	</form><br><br>
	<?php 
		if (isset($_POST['fazer'])) {
			if ($_POST['fazer'] =="acao1") {
				echo "A nota do aluno é: ".number_format($notas[$_POST['aluno']],1,",",".");
			}
			if ($_POST['fazer'] =="acao2") {
				krsort($notas);
				foreach ($notas as $indice => $valor) {
					echo "Aluno: ".$indice."<br>Nota: ".number_format($valor,1,",",".")."<br><br>";
				}
			}
			if ($_POST['fazer'] =="acao3") {
				arsort($notas);
				foreach ($notas as $indice => $valor) {
					echo "Aluno: ".$indice."<br>Nota: ".number_format($valor,1,",",".")."<br><br>";
				}
			}
			if ($_POST['fazer'] =="acao4") {
				$media=0.0;
				$cont=0.0;
				foreach ($notas as $valor) {
					$media+=$valor;
					$cont++;
				}
				echo "A média das notas é: ".number_format(($media/$cont),2,",",".");
			}
			if ($_POST['fazer'] =="acao5") {
				$maiornota=6;
				$contador=0;
				foreach ($notas as $valor) {
					if ($maiornota<$valor) {
						$contador++;
					}
				}
				echo "A quantidade de notas a cima da média(6) foi:".$contador;
			}
			if ($_POST['fazer'] =="acao6") {
				$menornota=10.0;
				foreach ($notas as $indice => $valor) {
					if ($menornota>$valor) {
						$menornota=$valor;
					}
				}
				foreach ($notas as $indice => $valor) {
					if ($valor==$menornota) {
						echo "A menor nota foi: ".number_format($menornota,2,",",".")." do aluno ".$indice;
					}
				}
			}
		}
		if (isset($_POST['nome'])) {
			foreach ($notas as $indices => $valores) {
				if ($_POST['nome']==$indices) {
					$cadastro="sim";
				}
			}
			if ($_POST['nome'] != null) {
				$cadastro="0";
				if ($cadastro=="sim") {
					echo "O aluno ".$_POST['nome']." está cadastrado.<br><br>";
				}
				else {
					echo "O aluno ".$_POST['nome']." não está cadastrado";
				}
			}
			
		}
	?>

</body>
</html>