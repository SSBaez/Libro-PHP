<?php

// Las matrices cuentan con un puntero interno que apunta al elemento actual de la matriz

// Si se inicializa una nueva matriz el puntero actual se inicializara con el puntero al primer elemento
// Si se invoca
current($nombre_matriz);
// se devolvera el primer elemento

// si se invoca
next();
// o
each();
// el puntero avanzará un elemento

// si se invoca:
each($nombre_matriz);
//se devuelve el elemento actualantes de que el puntero avance

// si se invoca:
next($nombre_matriz);
// el puntero avanzara y devolvera el nuevo elemento actual

// si se invoca:
reset($nombre_matriz);
// devuelve el puntero al primer elemento

// si se invoca
end($nombre_matriz);
// el puntero se envia al final

reset();
end();
// devuelven el primer y ultimo elemento de la matriz respectivamente

// para recorrer una matriz en orden inverso se puede utilizar
end(); y prev();

 ?>
