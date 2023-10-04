<?php include 'includes/header.php';


$carrito = ['Tablet', 'Computadora', 'Television'];

// in_array para buscar dentro del array

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

// Ordenar 
$numeros = array(1,3,5,2,9,6,4);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor

echo('<pre>');
var_dump($numeros);
echo('</pre>');

// Ordenar arreglo asociativo 
$cliente = array(
  'Saldo' => 200,
  'Tipo' => 'premium',
  'Nombre' => 'Kipi'
);
asort($cliente); //Ordena por valores, primero numeros y desp a-z
arsort($cliente); // primero z-a y luego numeros
ksort($cliente); //Ordena por las propiedades o keys a-z
krsort($cliente); // Ordena por keys z-a

echo('<pre>');
var_dump($cliente);
echo('</pre>');


include 'includes/footer.php';