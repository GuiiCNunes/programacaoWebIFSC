<?php

  function verificatime($time){
    
    $times["Corinthians"]=27500000;
    $times["Flamengo"]=32500000;
    $times["Grêmio"]=7000000;
    $times["Internacional"]=5400000;
    $times["Figueirense"]=6200000;
    $times["Avaí"]=500000;

    foreach($times as $nome => $torcedores){
      if ($nome == $time) {
        return $torcedores;
      }
    }
  }
?>
