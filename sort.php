<?php

/* ORDENACION ASCENDENTE */

$productos =  ['Tires', 'Oil', 'Spark Plugs'];
sort($productos);

// al imprimir los elementos saldrán ordenados ya sea alfabeticamente o bien num
// sort() discrimina entre mayus y minus por lo que las mayus van antes de las minus
echo "<h3>ordenando una matriz</h3>";
for ($i=0; $i < 3; $i++) {
  echo $productos[$i].' | ';
}

/* Si se quisiera utilizar una matriz con claves descriptvas para alamcenar
   articulos y sus precios, se necesitaría utilizar diferentes tipos de funciones
   de ordenación para mantener agrupadas las claves y sus valores al ordenarlos */

$productos02 = ['Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 4];

// asort() ordena la matriz en función del valor de c/elemento 'value'
// ksort() ordena la matriz por la clave 'key'
echo "<h3>ordenando una matriz con claves descriptivas</h3>";
ksort($productos02);
foreach ($productos02 as $key => $value) {
  echo $key.'<br>';
}

/* ORDENACION DESCENDENTE */

// lo mismo pero con rsort(), arsort(), krsort()



?>
