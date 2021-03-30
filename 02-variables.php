<?php include 'includes/header.php';

$nombre = "Leo";
//Reasignar valor de una variable
$nombre = "Leonardo";
$_nombre = "Torres";
$nombre_ = "Solorzano";

echo $nombre;
echo "<br/>";
var_dump ($nombre_); // var_dump nos va a dar informacion de la variable
echo "<br/>";

//Variables que no se puedan cambiar.. 
define ('constante', "Este es el valor de la constante");
echo constante;
echo "<br/>";
const constante2 = "Hola";
echo constante2;

$nombreCliente = "Kathryn";
$nombre_cliente = "Belen";

include 'includes/footer.php';