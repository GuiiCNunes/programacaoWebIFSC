<?php 
//Faça um programa em php que mostre na tela o nome, idade, endereço e e-mail do aluno. Passar os valores pela url.
	$nome = $_GET['nome'];
	$idade = $_GET['idade'];
	$endereco = $_GET['endereco'];
	$email = $_GET['email'];

	echo "Nome: $nome <br> Idade: $idade <br> Endereço: $endereco <br> E-mail: $email";

?>