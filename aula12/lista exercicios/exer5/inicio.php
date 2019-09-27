<!DOCTYPE html>
<html>
<head>
	<title>Dados</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Termo para doação de Sangue</h1><br><br>
	<form method="POST" action="autorizacao.php">
		Digite seu nome: <input type="text" name="nome" required=""><br>
		Digite sua idade: <input type="text" name="idade" required=""><br>
		Digite seu peso: <input type="text" name="peso" required=""><br>
		Selecione o seu tipo sanguíneo:<br>
		<input type="radio" name="sangue" value='A+'>A+
		<input type="radio" name="sangue" value='B+'>B+
		<input type="radio" name="sangue" value='AB+'>AB+
		<input type="radio" name="sangue" value='O+'>O+
		<input type="radio" name="sangue" value='A-'>A-
		<input type="radio" name="sangue" value='B-'>B-
		<input type="radio" name="sangue" value='AB-'>AB-
		<input type="radio" name="sangue" value='O-'>O-<br>
		Por favor responda as perguntas abaixo:<br>
		1. Você esta em boas condições de saúde?<br>
		<input type="radio" name="p1" value="sim">Sim
		<input type="radio" name="p1" value="nao">Não <br>
		2. Você dormiu pelo menos 6 horas nas ultimas 24 horas?<br>
		<input type="radio" name="p2" value="sim">Sim
		<input type="radio" name="p2" value="nao">Não <br>
		3. Sua última refeição foi a mais de 2 horas?<br>
		<input type="radio" name="p3" value="sim">Sim
		<input type="radio" name="p3" value="nao">Não <br>
		4. Você está grávida?<br>
		<input type="radio" name="p4" value="sim">Sim
		<input type="radio" name="p4" value="nao">Não <br>
		5. Você tomou vacina da gripe a menos de 48 horas?<br>
		<input type="radio" name="p5" value="sim">Sim
		<input type="radio" name="p5" value="nao">Não <br>
		6. Você é usuário de drogas?<br>
		<input type="radio" name="p6" value="sim">Sim
		<input type="radio" name="p6" value="nao">Não <br><br>
		<input type="submit" name="btn_enviar" value="Enviar"> <input type="reset" name="btn_ApagarDados" value="Apagar dados"><input type="button" name="btn_voltar" onclick="location.href='confirmar.php'" value="Voltar">
	</form>
</body>
</html>