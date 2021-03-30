<?php include 'includes/header.php';
// require 'includes/header.php';
// require_once 'includes/header.php'; Este es igual que require, pero revisa si el archivo que se manda a llamar ya fue incluido
// Y si no es asi, entonces manda a llamar ese archivo 


//Mandando a llamar una funcion que esta en otro archivo
require 'funcion.php';

iniciarApp();


include 'includes/footer.php';