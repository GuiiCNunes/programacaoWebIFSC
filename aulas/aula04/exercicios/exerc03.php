<?php 
	$iban = "pt50000067263-27616176433";
	$status = "Ativo";
	$senha = "45p-7a06";

	echo "Nº da conta Iban:  $iban<br>";
	echo "Código do país é: ".substr($iban, 0,4)."<br>";
	echo "Nº da conta ativo: ".substr($iban, 4)."  Status: ".$status;
?>