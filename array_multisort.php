<?php

// la función array_multisort() se puede usar para ordenar matrices multidimensionales
// o para odenar varias matrices simultáneamente

//Matriz bidimensional:

$products = [['TIR', 'Tires', 100],
             ['OIL', 'Oil', 10],
             ['SPK', 'Spark Plugs', 4]];

array_multisort($products);
// Ordenara la matriz $products por el primer elemeto de c/matriz, de forma ASCENDENTE

echo '<h3>Matriz bidimensional ordenada con array_multisort</h3>';
for($i = 0; $i < 3; $i++){
  for($j = 0; $j < 3; $j++){
    echo ' | '.$products[$i][$j];
  }
  echo ' |<br>';
}

?>
