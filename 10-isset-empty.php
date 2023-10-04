<?php include 'includes/header.php';

$cliente = [
  'nombre' => "kip"
];
$clientes = [];
$clientes2 = array();
$clientes3 = ['Pedro', 'Juan', 'Karen'];

// revisa si el array esta vacio
var_dump( empty($clientes));
var_dump( empty($clientes2));
var_dump( empty($clientes3));
echo("<br>");
echo("<br>");
// revisar si el array esta creado o si una prop esta definida
var_dump( isset($clientes2));
var_dump( isset($clientes3));
var_dump( isset($clientes4));
echo("<br>");
echo("<br>");
var_dump( isset($cliente['nombre']));
var_dump( isset($cliente['apellido']));


include 'includes/footer.php';