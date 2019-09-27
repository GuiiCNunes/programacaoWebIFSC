<!DOCTYPE html>
<html> 
<head> 
	<title>Exemplo Radio</title> 
	<meta charset="utf-8"> 
</head> 
<body> 
	<form action="exemploradio2.php" method="post"> 
		<B>Qual seu sistema operacional?</B><br> 
		<input type="radio" name="sistema" value="Windows Seven" required=""> Win 7  
		<input type="radio" name="sistema" value="Windows XP"> Win XP  
		<input type="radio" name="sistema" value="Linux"> Linux  
		<input type="radio" name="sistema" value="Mac"> Mac <br><br> 
		<B>Qual a marca de seu monitor?</B><br> 
		<input type="radio" name="monitor" value="Samsung" required=""> Samsung  
		<input type="radio" name="monitor" value="LG"> LG  
		<input type="radio" name="monitor" value="Desconhecido"> Desconhecido <br><br> 
		<input type="submit" value="Enviar"> 
	</form> 
</body> 
</html>