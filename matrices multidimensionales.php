<?php

$products = [['TIR', 'Tires', 100],
             ['OIL', 'Oil', 10],
             ['SPK', 'Spark Plugs', 4]];

echo "<h3>Sin usar bucle</h3>";

echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|<br>';
echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|<br>';
echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|<br>';

echo "<br><h3>Con bucle for</h3>";
for($i = 0; $i < 3; $i++){
  for($j = 0; $j < 3; $j++){
    echo "|".$products[$i][$j];
  }
  echo "|<br>";
}

echo "<br><h3>Con nombres en columna en vez de números</h3>";
// Matriz bidimensional
$productsV2 = [['Code' => 'TIR', 'Description' => 'Tires', 'Price' => 100],
               ['Code' => 'OIL', 'Description' => 'Oil', 'Price' => 10],
               ['Code' => 'SPK', 'Description' => 'Spark Plugs', 'Price' => 4]];

// El for permite recorrer la matriz externa $productsV2, NUMERICAMENTE INDEXADA
for($row = 0; $row < 3; $row++){
  // Cada fila de la matriz $productsV2 es una matriz asociativa.
  while(list($key, $value) = each($productsV2[$row])){
    echo "|".$value;
  }
  echo "|<br>";
}

//matriz tridimensional
$categories = [[['CAR_TIR', 'Tires', 100],
                ['CAR_OIL', 'Oil', 10],
                ['CAR_SPK', 'Spark Plugs', 4]],//fin de panel 1
               [['VAN_TIR', 'Tires', 100],
                ['VAN_OIL', 'Oil', 10],
                ['VAN_SPK', 'Spark Plugs', 4]],//fin de panel 2
               [['TRK_TIR', 'Tires', 100],
                ['TRK_OIL', 'Oil', 10],
                ['TRK_SPK', 'Spark Plugs', 4]]];//fin de panel 3

echo "<br><h3>Matrices tridimensionales</h3>";

for($layer = 0; $layer < 3; $layer++){
  echo "Layer ".$layer."<br>";
  for($row = 0; $row < 3; $row++){
    for($col = 0; $col < 3; $col++){
      echo ' | '.$categories[$layer][$row][$col];
    }
    echo " |<br>";
  }
}

?>
