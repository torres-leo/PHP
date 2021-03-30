<?php include "includes/header.php";

// While
echo "<br/>";
echo "while";
echo "<br/>";
$incremento = 0;

while ($incremento < 10) {
    echo $incremento . "<br/>";
    $incremento++;
}
echo "<br/>";

// Do while
echo "Do while";
echo "<br/>";
$i = 0;
do {
    echo $i;
    $i++;
} while($i<15);
echo "<br/>";

// For loop
echo "For loop";
echo "<br/>";
for($i = 0;$i < 10; $i++) {
    echo $i;
}

echo "<br/>";
// Multiplos de 3 y 5
echo "<br/>";
echo "-- Multiplos de 3 y 5";
echo "<br/>";

for($i = 1;$i < 50; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "Fizz Buzz" . "<br/>"; // Si es multiplo de 3 y 5
    }
    else if($i % 3 === 0) {
        echo $i . "Fizz" . "<br/>" ; // Si es multiplo de 3
    }
    else if ($i % 5 === 0){
        echo $i . "Buzz" . "<br/>"; // Si es multiplo de 5
    } 
    else {
        echo $i . "<br/>"; 
    }
}

//For each
echo "<br/>";
echo "For each";
echo "<br/>";
$clientes = array('Pedro','Juan','Leo');
foreach($clientes as $cliente) {
    echo "Cliente: " . $cliente . "<br/>";
}
echo "Cantidad de clientes: " . count($clientes);
echo "<br/>";
// echo "Cantidad de clientes: " . sizeOf($clientes); Devuelve el tamaño del arreglo 
echo "<br/>";
$cliente = [
    "nombre" => 'Leo',
    "Saldo" => 200,
    "Tipo" => 'Premium'
];
foreach($cliente as $key => $valor) {
    echo $key . ": " . $valor . "<br/>";
}

include "includes/footer.php";