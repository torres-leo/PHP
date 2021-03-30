<?php include 'includes/header.php';

$autenticado = false;
$admin = true;

if($autenticado || $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado. Inicia sesion.";
}

echo "<br/>";

if($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado. Inicia sesion.";
}

// If anidado
echo "<br/>";

$cliente = [
    "nombre" => 'Leo',
    "saldo" => 0,
    "informacion" => [
        "tipo" => 'regular'
    ]
];

if(!empty($cliente)) {
    echo "El arreglo de cliente no esta vacio";

    if($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo";
    } else {
        echo "El cliente no cuenta con saldo";
    }
}

// else if
echo "<br/>";

if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if($cliente['informacion']['tipo'] === 'Premium') {
    echo "El cliente es premium";
} else {
    echo "No existe el cliente";
}

//switch
echo "<br/>";

$tecnologia = "JavaScript";
switch($tecnologia) {
    case 'PHP': 
        echo "PHP, un excelente lenguaje";
        break;
    case "JavaScript":
        echo "JavaScript, el lenguaje de la web";
        break;
    case 'HTML':
        echo "Es hermoso";
        break;

    default:
        echo "Otro lenguaje";
}


include 'includes/footer.php';