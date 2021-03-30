<?php include 'includes/header.php';

$carrito = ["PC", 25, 33.25, true];
echo "<pre>";
var_dump ($carrito);
echo "</pre>";

echo $carrito[2]; //Accediendo a un index


//Agregando un nuevo elemento al inicio o al final del arreglo

array_push($carrito,'Audifonos'); //Con 'array_push', se agrega al final
echo "<pre>";
var_dump ($carrito);
echo "</pre>";

array_unshift($carrito, 'Perro'); //Para agregarlo al inicio
echo "<pre>";
var_dump ($carrito);
echo "</pre>";

include 'includes/footer.php';