<?php 
	if (!isset($_SESSION)){
    session_start();
  	}

  	if (isset($_SESSION['user'])) {
  		function conectar($local, $usuario, $senha, $banco){
  			$conexao = mysqli_connect($local, $usuario, $senha, $banco);
  			if ($conexao == true) {
  				return $conexao;
  			} else {
  				echo "Não foi possível realizar a conexão com a base de dados. <br>";
  			}
		}

		function desconectar($conexao){
			if (mysqli_close($conexao) != true) {
				echo "Não foi possível desconectar. <br><br>";
			}
		}
  	} else {
  		$_SESSION['erroLogin'] = "Você Precisa estar logado.";
  		header("location: index.php");
  	}
	
?>