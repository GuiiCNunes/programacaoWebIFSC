<!DOCTYPE html>
<html>
<head>
	<title>Jogo</title>
</head>
<body>
	<?php 
		if (isset($_POST['nome'])){

	 ?>
	<b><h1>Olá <?php echo $_POST['nome'] ?></h1></b>

	<?php 
		} else{ ?>
		<b><h1>Olá, infelizmente o sistema não foi capaz de recuperar o seu nome, pedimos desculpas pelo ocorrido e fique a vontade para jogar novamente.</h1></b>
	<?php
		$_POST['nome'] = "Desconhecido"; }
	?>
	<form method="POST" action="processamento.php">
		<input type="hidden" name="nome" value="<?php echo $_POST['nome'] ?>">
		<b>Responda as perguntas a baixo: </b><br><br>
		<b>1. No caminho de casa até o mercado, uma senhora conta 10 árvores a sua direita.<br> Após as compras, ela volta para casa e conta 10 árvores a sua esquerda. Quantas árvores ela viu no total?</b><br><br>
		<input type="radio" name="p1" value="10" required=""> 10
		<input type="radio" name="p1" value="20" required=""> 20
		<input type="radio" name="p1" value="15" required=""> 15
		<input type="radio" name="p1" value="5" required=""> 5
		<input type="radio" name="p1" value="30" required=""> 30
		<br><br>
		<b>2. Uma aranha esta subindo um muro de 10 metros. Durante o dia ela consegue subir dois metros, porém todas as noites ela desce um metro. <br>Em quanto tempo ela conseguirá chegar ao topo?</b><br><br>
		<input type="radio" name="p2" value="6" required=""> 6
		<input type="radio" name="p2" value="7" required=""> 7
		<input type="radio" name="p2" value="8" required=""> 8
		<input type="radio" name="p2" value="9" required=""> 9
		<input type="radio" name="p2" value="10" required=""> 10
		<br><br>
		<b>3. Se, durante uma corrida de carros, você deixa o segundo colocado pra trás, qual é sua colocação após a ultrapassagem?</b><br><br>
		<input type="radio" name="p3" value="primeiro" required=""> Primeiro
		<input type="radio" name="p3" value="segundo" required=""> Segundo
		<input type="radio" name="p3" value="terceiro" required=""> Terceiro
		<input type="radio" name="p3" value="quarto" required=""> Quarto
		<input type="radio" name="p3" value="quinto" required=""> Quinto
		<br><br>
		<b>4. A mãe de Maria tem cinco filhas: Fafá, Fefê, Fifi, Fofó e? <br>Qual é o nome da quinta filha?</b><br><br>
		<input type="radio" name="p4" value="fufú" required=""> Fufú
		<input type="radio" name="p4" value="marta" required=""> Marta
		<input type="radio" name="p4" value="marcia" required=""> Marcia
		<input type="radio" name="p4" value="maria" required=""> Maria
		<input type="radio" name="p4" value="melaine" required=""> Melaine
		<br><br>
		<b>5. Se uma borboleta vive cinco dias e a cada dia ela voa quatro metros, <br>quantos metros ela terá percorrido em uma semana?</b><br><br>
		<input type="radio" name="p5" value="10" required=""> 10
		<input type="radio" name="p5" value="12" required=""> 12
		<input type="radio" name="p5" value="14" required=""> 14
		<input type="radio" name="p5" value="18" required=""> 18
		<input type="radio" name="p5" value="20" required=""> 20
		<br><br>
		<b>6. Em uma sala quadrada, temos um gato em cada canto. Cada gato vê outros três gatos.<br> Quantos gatos há no total dentro da sala?</b><br><br>
		<input type="radio" name="p6" value="2" required=""> 2
		<input type="radio" name="p6" value="4" required=""> 4
		<input type="radio" name="p6" value="6" required=""> 6
		<input type="radio" name="p6" value="8" required=""> 8
		<input type="radio" name="p6" value="12" required=""> 12
		<br><br>
		<b>7. Uma família resolveu passear de carro. Nele entraram 1 avô, 2 pais, 2 filhos e 1 neto. <br>Qual o número mínimo de pessoas dentro do veículo, afinal?</b><br><br>
		<input type="radio" name="p7" value="6" required=""> 6
		<input type="radio" name="p7" value="4" required=""> 4
		<input type="radio" name="p7" value="2" required=""> 2
		<input type="radio" name="p7" value="5" required=""> 5
		<input type="radio" name="p7" value="3" required=""> 3
		<br><br>
		<b>8. Quanto é a metade do dobro de uma duzia?</b><br><br>
		<input type="radio" name="p8" value="3" required=""> 3
		<input type="radio" name="p8" value="6" required=""> 6
		<input type="radio" name="p8" value="9" required=""> 9
		<input type="radio" name="p8" value="12" required=""> 12
		<input type="radio" name="p8" value="14" required=""> 14
		<br><br>
		<b>9. Qual é o sucessor do dobro do antecessor do sucessor do triplo de 2.</b><br><br>
		<input type="radio" name="p9" value="12" required=""> 12
		<input type="radio" name="p9" value="7" required=""> 7
		<input type="radio" name="p9" value="16" required=""> 16
		<input type="radio" name="p9" value="15" required=""> 15
		<input type="radio" name="p9" value="13" required=""> 13
		<br><br>
		<b>10. Um casal tem 6 filhos homens, cada filho tem uma irmã.<br>Quantas pessoas há nessa família no total?</b><br><br>
		<input type="radio" name="p10" value="9" required=""> 9
		<input type="radio" name="p10" value="15" required=""> 15
		<input type="radio" name="p10" value="17" required=""> 17
		<input type="radio" name="p10" value="14" required=""> 14
		<input type="radio" name="p10" value="19" required=""> 19
		<br><br>
		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_apagar" value="Apagar Dados">
		<input type="button" name="btn_preencherdados" value="Preencher Dados" onclick="location.href = 'inicio.php'">
	</form>
</body>
</html>