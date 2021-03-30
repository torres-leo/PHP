<?php include 'includes/header.php';

$numero1 = 30;
$numero1++;
echo $numero1;

// echo $numero1++;
/* Si lo ponemos así, va a imprimir 30
Ya que el incremento se está haciendo después*/

//echo ++$numero1;
/* En cambio si lo ponemos al inicio de leer la 
variable, si va hacer el incremento en 1 */
echo "<br/>";

$numero2 = 30;
$numero2--;
echo $numero2;

// INCREMENTOS O DECREMENTOS EN CANTIDADES
echo "<br/>";

$numero3 = 20;
//Incrementando en 5
$numero3 += 5;
echo $numero3;

echo "<br/>";

$numero4 = 20;
//Decremento en 5
$numero4 -= 5;
echo $numero4;
include 'includes/footer.php';