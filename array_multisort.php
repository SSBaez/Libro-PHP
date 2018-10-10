<?php

// la función array_multisort() se puede usar para ordenar matrices multidimensionales
// o para odenar varias matrices simultáneamente

//Matriz bidimensional:

$products = [['TIR', 'Tires', 100],
             ['OIL', 'Oil', 10],
             ['SPK', 'A-Spark Plugs', 4]];

echo '<h3>matriz sin ordenación específica</h3>';
for($i = 0; $i < 3; $i++){
  for($j = 0; $j < 3; $j++){
    echo ' | '.$products[$i][$j];
  }
  echo ' |<br>';
}

array_multisort($products);
// Ordenara la matriz $products por el primer elemeto de c/matriz, de forma ASCENDENTE

echo '<h3>Matriz bidimensional ordenada con array_multisort</h3>';
for($i = 0; $i < 3; $i++){
  for($j = 0; $j < 3; $j++){
    echo ' | '.$products[$i][$j];
  }
  echo ' |<br>';
}

// ordenación definida por el usuario
// ordenacion alfaceticamente por medio de la segunda columna [1] para la tercera sería [2]
function compare($x, $y){ // el fin de esta funcion es tomar dos valores y determinar su orden
  if($x[1] == $y[1]){
    return 0;
  }
  else if($x[1] < $y[1]){
    return -1;
  }else{
    return 1;
  }
}

usort($products, 'compare');

echo '<h3>usando usort, ordenacion alfaceticamente por medio de la segunda columna</h3>';
for($i = 0; $i < 3; $i++){
  for($j = 0; $j < 3; $j++){
    echo ' | '.$products[$i][$j];
  }
  echo ' |<br>';
}

?>
