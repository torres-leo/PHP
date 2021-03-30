<?php include 'includes/header.php';

$cliente = [];
$cliente2 = array();
$cliente3 = array('Leo', 'Kathryn', 'Torres');
$clientes = [
    'nombre' => "Leonardo",
    "edad" => 24
];

// 'empty', verifica si un arreglo esta vacio
var_dump(empty($cliente));
var_dump(empty($cliente2));
var_dump(empty($cliente3));

// 'Isset', revisa si un arreglo o una propiedad esta bien definida
echo "<br/>";
var_dump(isset($cliente));
var_dump(isset($cliente2));
var_dump(isset($cliente3));
var_dump(isset($cliente4));

// 'Isset', permite revisar si una propiedad en un arreglo, existe
echo "<br/>";
var_dump(isset($clientes['nombre']));
var_dump(isset($clientes['genero']));


include 'includes/footer.php';