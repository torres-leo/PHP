<?php include 'includes/header.php';

// 'In_array', buscar un elemento en un arreglo 
$carrito = ['Tablet', 'PC', 'TV'];
var_dump(in_array('PC', $carrito));

//Ordenar elementos de un arreglo
$numeros = array(1,4,6,2,7,3,5);
sort($numeros); // De menor a mayor
rsort($numeros); // De mayor a menor;

echo '<pre>';
var_dump($numeros);
echo '</pre>';

//Ordenar arreglo asociativo

$cliente = array(
    'nombre' => 'Leo',
    'edad' => 24,
    'tipo' => 'Premium'
);

// asort($cliente); // Ordena por valores alfabetico
// ksort($cliente); // Ordena por llaves (orden alfabetico)
// arsort($cliente); // Ordena por valores (de Z hacia A)

echo '<pre>';
var_dump($cliente);
echo '</pre>';

include 'includes/footer.php';