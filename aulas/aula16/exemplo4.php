<!DOCTYPE html>
<html>
<head>
  <title>Funções</title>
  <meta charset="utf-8">
</head>
<body>
  <?php
    function media($nota1,$nota2){
      $media=($nota1+$nota2)/2;
      return $media;
    }
    $media1 = media(7,7);
    echo "A média do aluno 1 é: $media1 <br>";
    $media2 = media(2,7);
    echo "A média do aluno 2 é: $media2 <br>";
    $media3 = media(1,7);
    echo "A média do aluno 3 é: $media3 <br>";
    $media4 = media(3,7);
    echo "A média do aluno 4 é: $media4 <br>";
    $media5 = media(10,7);
    echo "A média do aluno 5 é: $media5 <br>";
    
  ?>
</body>
</html>
