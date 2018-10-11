<?php
$arreglo = [2, 3, 4, 8];
// para modificar cada elemento de una matriz de la misma forma se puede utilizar:
// array_walk();

// bool array_walk(array mat, callable func[, mixed datos_del_usuario])
// --> mat es la matriz que procesará
// --> func es el nombre d euna funcion definida por el usuario que se aplicará a c/elemento
// --> datos_del_usuario es opcional, si se utilizá, se poasará a través de su función como parametro

// array_walk espera que se declre una funcion propia

// el siguiente codigo muestra c/elemento en una línea invocando la funcion definida por el usuario my_print
function my_print($value){
  echo "$value<br>";
}

array_walk($arreglo, 'my_print');
// en la mayporia de los casos la matriz solo uytilizara lkos valores de la matriz. En otros, puede que tambien
// necesitepasar un parametro a la funcion utrilizando el parametro datos_del_usuario
echo "---------------------<br>";

// la funcion modifciara los valores de la matriz y necesitara un parametro
function my_multiply(&$value, $key, $factor){
  //primer parametro --> un valor de elemento de matriz
  //segundo parametro --> una clave de elemento matrriz
  //tercer parametro --> factor
  //el simbolo & colocado delante de una variable, en este caso $value significa que se pasara por referencia
  //esto permite que la funcion modifique los contenidos de la matriz
  $value *= $factor;
}
array_walk($arreglo, 'my_multiply', 3);
array_walk($arreglo, 'my_print');


?>
