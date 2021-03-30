<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Leo',
    'apellido' => 'Torres',
    'edad' => 23,
    'informacion' => [
        'sexo' => 'Masculino'
    ]
];

echo "<pre>";
var_dump ($cliente);
echo "</pre>";

//Accediendo a una informacion especifica
echo ($cliente['nombre']);
echo ($cliente['edad']);
echo ($cliente['informacion']['sexo']);

//Agregando otro campo
$cliente['codigo'] = 1234;
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';