<?php 
	
	$departamentos[$_POST['depart1']] = $_POST['sal1'];
	$departamentos[$_POST['depart2']] = $_POST['sal2'];
	$departamentos[$_POST['depart3']] = $_POST['sal3'];
	$maiorsalario = 0;

	echo "<h3>Dados dos funcionários</h3><br><br>";	
	foreach ($departamentos as $depart => $sal) {
		if ($sal > $maiorsalario) {
			$maiorsalario = $sal;
		}
	}



?>

<table border="2">
  <tr><!-- Cabeçalho -->
    <td bgcolor="#FFFF00"><center><b>Departamento</b></center></td>
    <td bgcolor="#FFFF00"><center><b>Salário</b></center></td>
  </tr>
    <?php foreach ($departamentos as $depart => $sal) {
    ?> <!-- Fechar o PHP para enxertar -->
    <tr>
      <td bgcolor="#A4A4A4"> <center><?php echo $depart; ?></center></td>
      <td bgcolor="#A4A4A4"> <center><?php echo number_format($sal,2,",","."); ?></center></td>
    </tr>
    <?php } ?>
</table>

<?php 
	foreach ($departamentos as $depart => $sal){
		if ($sal == $maiorsalario) {
			echo "<br><br>O departamento que tem o maior salário é: $depart e o valor do salário recebido pelo funcionário é de: R$".number_format($sal,2,",",".")."<br><br>";
		}
	}
?>

<?php 
//+++++++++++++++++++++++++++++++++++++++++++++PLUS++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	echo "<h4>Quadro geral: <br></h4>";

	$Departamentos[$_POST['depart1']]["nome"] = $_POST['nome1'];
	$Departamentos[$_POST['depart1']]["salario"] = $_POST['sal1'];
	$Departamentos[$_POST['depart2']]["nome"] = $_POST['nome2'];
	$Departamentos[$_POST['depart2']]["salario"] = $_POST['sal2'];
	$Departamentos[$_POST['depart3']]["nome"] = $_POST['nome3'];
	$Departamentos[$_POST['depart3']]["salario"] = $_POST['sal3'];

?>

<table border="2">
  <tr><!-- Cabeçalho -->
    <td bgcolor="#FFFF00"><center><b>Departamento</b></center></td>
    <td bgcolor="#FFFF00"><center><b>Nome</b></center></td>
    <td bgcolor="#FFFF00"><center><b>Salário</b></center></td>
  </tr>
  <!-- Conteúdo -->
    <?php foreach ($Departamentos as $depart => $grupo) { ?> 
    	<!-- Foreach Inicial da Matriz, coloca primeiro campo -->
    	<tr> <!-- Inicia a linha -->
    	<td bgcolor="#A4A4A4"> <center><?php echo $depart; ?></center></td> <!-- Nome do departamento 1º Array da Matriz -->
    	<?php foreach ($grupo as $tipo => $valor) {
    		if ($tipo == "salario") { ?>    
      			<td bgcolor="#A4A4A4"> <center><?php echo number_format($valor,2,",","."); ?></center></td>
    		<?php } //Encerra o IF
    	else { ?>
    			<td bgcolor="#A4A4A4"> <center><?php echo $valor; ?></center></td>
    		<?php } //Encera o ELse
    	} //Encerra o FOREACH da Linha ?>
    	</tr> <!-- Encerra a linha -->
    <?php } //Encerra o Foreach Geral ?>
</table>