<?php

function randomAlpha($lenght){
  $characters="ABCDEFGHIJKLMNOPQRSTUVXYZabcdefghijklmnopqrstuvxyz0987654321";
  $charactersLen=strlen($characters);
  $random="";
  for ($i=0; $i <$lenght ; $i++) {
    $random.=$characters[rand(0,$charactersLen-1)];
  }
  return $random;
}

 ?>
