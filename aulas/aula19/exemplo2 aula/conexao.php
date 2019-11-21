<?php 


function conectar($local,$usuario,$senha,$banco) {

$conexao = mysqli_connect($local,$usuario,$senha,$banco);
return $conexao;

}

function desconectar ($conexao) {
	if (mysqli_close($conexao) == true) {
		echo "Conexão encerrada com Sucesso <br>";
	}
	else {
		echo "Erro ao encerrar a conexão <br>";
	}
}





 ?>