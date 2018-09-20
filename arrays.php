<?php

  $prices = ['Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 4];

  echo "<h3>Usando foreach</h3>";
  foreach ($prices as $key => $value) {
    echo $key." - ".$value."<br>";
  }

  echo "<h3>Usando while y each</h3>";
  while ($element = each($prices)) {
    echo $element['key']." - ". $element['value']."<br>";
  }

  // Al utilizar each(), la matriz realiza el seguimiento del elemento actual
  // si queremos utilizar la matriz dos o más veces en la misma secuencia de
  // comandos, debemos restablecer el elemento actual al principio de la matriz
  // utilizando la función reset()

  reset($prices);
  echo "<h3>Usando while y each</h3>";
  while ($element02 = each($prices)) {
    echo $element02['key']." - ". $element02['value']."<br>";
  }

  reset($prices);
  echo "<h3>Usando while y list</h3>";
  while (list($product, $price) = each($prices)) {
    echo $product." - ".$price."<br>";
  }

$dulces = ['tutsi' => 5, 'mazapan' => 2, 'Pelon pelo rico' => 6];
$frituras = ['chetos' => 10, 'sabritas' => 15, 'rufles' => 12 ];

echo "<h3>Unión de matrices</h3>";

$golosinas = $dulces + $frituras;
while (list($producto, $precio) = each($golosinas)) {
  echo $producto." - ".$precio."<br>";
}
// El operador unión intenta añadir los elementos de $frituras al final de
// $dulces. Si los elements de $frituras tienen las mismas claves que algunos
// elementos ya presentes en $dulces, no se añadira, es decir, no se
// sobreecribiran los elementos de $dulces

?>
