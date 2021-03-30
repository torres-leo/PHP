<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string {
    if($autenticado) {
        return "El usuario esta autenticado";
    } else {
        return "Usuario no autenticado";
    }
}
// Si se quiere retornar algo, hay que declarar el tipo del valor que se quiere retornar, en este caso es string.
// Si se quiere imprimir con 'echo', hay que colocar un 'void' en el lugar del string.

$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';