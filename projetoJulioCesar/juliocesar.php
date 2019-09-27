<!DOCTYPE html>
<html>
<head>
	<title>Julio Cesar Cripto</title>
	<meta charset="utf-8">
</head>
<body>


	<?php 
	//Pegar dados-------CONTA COMO REQUISIÇÃO HTTP PARA O URL?Primeiro passo SALVAR CONTEÚDO JSON???---------------
	function pegar() {
	$url = "https://api.codenation.dev/v1/challenge/dev-ps/generate-data?token=db07c0e4e7095d327489bc43e4d2f0a64c348b85";
	$json = file_get_contents($url);
	$dados = json_decode($json);
	return $dados;
	}
	$frase = pegar() -> cifrado;
	$tamanho = strlen($frase);
	$casas = pegar() -> numero_casas;
	$criptografia = array();

	//Descriptografar
	for ($i=0; $i < $tamanho ; $i++) { 
		if (ord($frase[$i])>=97 && ord($frase[$i])<=122) {
			$resultado = ord($frase[$i])-$casas; //Fazendo o loop do 97~122
				if($resultado<97){
					$criptografia[$i]= chr(122 - (97 - ($resultado + 1)));
				}
				else {
					$criptografia[$i]= chr((ord($frase[$i])-$casas));
				}
		}
		else {
			$criptografia[$i]= chr(ord($frase[$i]));
		}
	}

	//Frase 'juntada' 
	$textodecifrado = implode($criptografia);


	
	//Resumo Criptográfico
	function resumo_crip($texto) {
		return sha1($texto);
	}

	//Alterando o JSON 
	$answer = pegar();
	$answer -> decifrado = $textodecifrado;
	$answer -> resumo_criptografico = resumo_crip($textodecifrado);


	//Criando e escrevendo no answer.json
	$fp = fopen('answer.json', 'w'); //Criar
	fwrite($fp, json_encode($answer));//Escrever
	fclose($fp); //Fechar Doc.


	/*//Enviando via POST
	$url  = 'https://api.codenation.dev/v1/challenge/dev-ps/submit-solution?token=db07c0e4e7095d327489bc43e4d2f0a64c348b85';
	$data = ['answer.json'];
	$ch   = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

	$result = curl_exec($ch);

	if ($result != null) { 
	echo $result;
	}
	else {
	echo "null";
	}

	curl_close($ch);*/




	/*----------------------------------FALTA FAZER-------------------------------------------------------------------------
	-Submeter o arquivo atualizado para correção via POST para a API.
		API: https://api.codenation.dev/v1/challenge/dev-ps/submit-solution?token=db07c0e4e7095d327489bc43e4d2f0a64c348b85
	-a API espera um arquivo sendo enviado como multipart/form-data, como se fosse enviado por um formulário HTML, com um campo do tipo file com o nome answer.
	*/
	//TESTES
	/*for ($x = 0 ; $x < $tamanho; $x++) { 
			echo $criptografia[$x];
		};*/
	//echo pegar() -> cifrado;
	//echo $tamanho;
	//echo $casas;
	//echo $textodecifrado;
	//echo json_encode($answer);
	//echo file_get_contents("answer.json")."<BR>TESTE";
	?>
	<!--Enviando pelo Formulário !-->
	<form enctype="multipart/form-data" action="https://api.codenation.dev/v1/challenge/dev-ps/submit-solution?token=db07c0e4e7095d327489bc43e4d2f0a64c348b85" method="POST">
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="answer" type="file" />
    <input type="submit" value="Enviar arquivo" />
	</form>
</body>
</html>