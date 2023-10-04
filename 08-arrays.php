<?php include 'includes/header.php';


// $carrito = array('Tablet', 'Television', 'Computadora');
$carrito = ['Tablet', 'Television', 'Computadora'];
// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// agregar al array
$carrito[3] = 'Reloj';
array_push($carrito, 'Audifonos');
array_unshift($carrito, 'Parlante');
echo "<pre>";
var_dump($carrito);
echo "</pre>";

include 'includes/footer.php';