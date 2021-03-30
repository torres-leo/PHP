<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => 'Tablet',
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => 'PC',
        "precio" => 500,
        "disponible" => true
    ],
    [
        "nombre" => 'Televisión',
        "precio" => 300,
        "disponible" => false
    ]
];

echo "<pre>";
var_dump($productos);
echo "<br/>";

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); // json_encode va a convertir un arreglo a un string
// JSON_UNESCAPED_UNICODE para caracteres Unicode como acentos

$json_array = json_decode($json); // json_decode va a convertir un string a arreglo
var_dump($json);
echo "<br/>";
var_dump($json_array);

echo "</pre>";

include 'includes/footer.php';