<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Acesso</title>
</head>
<body>
	<form method="POST" action="validarLogin.php">
		<h1>Área Restrita</h1><br>
		Login: <input type="text" name="login" required=""> Senha: <input type="password" name="senha"><br><br>
		Selecione o perfil: 
		<select name="tipoUser">
				<option value="admin">Administrador</option>
				<option value="user">Usuário</option>
		</select><br><br>
		<input type="submit" name="btn_acessar" value="Acessar">
	</form>
	<?php if (isset($_SESSION['erroLogin'])) {
		echo $_SESSION['erroLogin'];
		unset($_SESSION['erroLogin']);
	} 
	if (isset($_SESSION['deslogar'])) {
		echo $_SESSION['deslogar'];
		unset($_SESSION['deslogar']);
	}?>
</body>
</html>