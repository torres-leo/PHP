<?php 
declare(strict_types=1);
include 'includes/header.php';


echo "Funcion de suma = ";
function sumar() {
    echo 2 + 2;
}
sumar();

echo "<br/>";
echo "Funcion de suma con parametros = ";
function sumar2(float $numero1 = 0, float $numero2 = 0) {
    echo $numero1 + $numero2;
}
sumar2(4, 12.5);

echo "<br/>";
echo "suma asignando valor especifico = ";
function sumar3(float $numero1 = 0, float $numero2 = 0, float $numero3 = 0) {
    echo $numero1 + $numero2 - $numero3;
}
//Con php8 podemos asignarle a la variable un valor en especifico
sumar3(numero3: 7, numero1: 12.5, numero2: 2);

include 'includes/footer.php';