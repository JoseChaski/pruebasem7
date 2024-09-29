<?php

$max = 50;

for ($i=1; $i<= $max ; $i++) {
  if (numPrimo($i)) {
    echo "<hr>El numero: " . $i . " es PRIMO <br>";
  }
}

function numPrimo($numero){
  $contador = 0;

  for ($i=1; $i <= $numero ; $i++) {
    if ($numero%$i==0) {
      $contador = $contador +1;
    }
  }

  if ($contador==2) {
    return true;
  }else {
    return false;
  }
}

 ?>
