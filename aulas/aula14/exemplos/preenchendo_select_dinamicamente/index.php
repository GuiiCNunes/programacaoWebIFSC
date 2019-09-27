<!DOCTYPE html>
<html>
<head>
	<title>Preencher Select Dinamicamente</title>
</head>
<body>
	<h2><b>Preenchendo o objeto select dinamicamente através de um array</b></h2><br>
	<?php 
		$cidades = ["Santa Catarina","Paraná","Rio Grande do Sul","São Paulo","Rio de Janeiro","Natal"];
		sort($cidades);
	?>
	<form method="POST" action="mostrarcidade.php">
		<b>Selecione a cidade desejada</b><br>
		<select name=cidades>
			<option value=""></option>
			<?php foreach ($cidades as $valor) { //Inicio foreach
			
			?>
			<option value="<?php echo $valor?>"><?php echo "$valor"; ?> </option>
			<?php 
				} //Fim do foreach
			?>
		</select>
		<br><br>
		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_apagar" value="Apagar">
	</form>

</body>
</html>