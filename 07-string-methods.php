<?php include 'includes/header.php';

$nombre = "Leonardo";
echo strlen($nombre); // Conocer el tamaño de una variable
echo "<br/>";
var_dump($nombre);

//Eliminar espacios en blanco
echo "<br/>";
$name = "  Kathryn        ";
var_dump($name);
//Borrando los espacios
echo "<br/>";
$eraser = trim($name);
echo($eraser);

//CONVERTIR EN MAYUSCULA
echo strtoupper($name);
//CONVERTIR EN MINUSCULA
echo strtolower($name);

//REEMPLAZAR DATOS
echo "<br/>";
echo (str_replace('Leonardo', 'Leo', $nombre));
echo "<br/>";
$cambio = str_replace("Leonardo", "Leito", $nombre);
echo($cambio);

//Revisar si existe un string
echo "<br/>";
$otroNombre = 'Brenda Torres';
echo strpos($otroNombre, 'e');

//Concatenando string
echo "<br/>";
$tipoCliente = 'VIP';
echo 'El cliente: '.$otroNombre.' es '.$tipoCliente;
/* No es necesario poner los puntos pegados con las palabras */

//OTRA FORMA DE CONCATENAR VARIABLES
echo "<br/>";
echo "El cliente: {$name} es {$tipoCliente}";

include 'includes/footer.php';