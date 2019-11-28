<?php 
	session_start();
	if (isset($_POST['tipoUser'])) {

		if ($_POST['tipoUser'] == 'admin') {
			if ($_POST['login'] == 'admin' && $_POST['senha'] == 'admin') {
				$_SESSION['user'] = 'admin';
				header("location: administrador.php");
			} else {
				$_SESSION['erroLogin'] = "Usuário e/ou senha incorretos.";
				header("location: index.php");
			}

		} elseif ($_POST['tipoUser'] == 'user') {
			if ($_POST['login'] == 'usuario' && $_POST['senha'] == 'usuario') {
				$_SESSION['user'] = 'user';
				header("location: usuario.php");
			} else {
				$_SESSION['erroLogin'] = "Usuário e/ou senha incorretos.";
				header("location: index.php");
			}
		}
	} else {
		$_SESSION['erroLogin'] = "Realize o login.";
		header("location: index.php");
	}
?>