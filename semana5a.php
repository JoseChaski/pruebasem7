<?php

function descuento($precio){
  if ($precio>= 2000 && $precio<= 6000) {
    $descuento1 = $precio * 0.15;
    $precioTotal = $precio - $descuento1;

    echo "Su producto tiene un descuento del 15% equivalente a: " . $descuento1;
    echo "<br>El valor total del producto es de: " . $precioTotal;
  }
    elseif ($precio>6000) {
      $descuento2 = $precio * 0.25;
      $precioTotal = $precio - $descuento2;

      echo "Su producto tiene un descuento del 25% equivalente a: " . $descuento2;
      echo "<br>El valor total del producto es de: " . $precioTotal;
    }
  else {
    echo "Su producto no tiene descuento";
  }
}

descuento(1000);

 ?>
