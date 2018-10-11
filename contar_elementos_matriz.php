<?php

$matriz01 = [1, 2, 5, 1, 10];
$matriz02 = [4, 5, 1, 2, 3, 1, 2, 1];
$elementos01 = count($matriz01);
$elementos02 = sizeof($matriz01);
$unicos = array_count_values($matriz02); // devuelve una matriz asociativa con una tabla de frecuencia
$elementos03 = count($unicos);

echo "hay $elementos01 elementos, con count<br>";
echo "hay $elementos02 elementos, con sizeof<br>";

echo "Clave \t Valor<br>";




?>
