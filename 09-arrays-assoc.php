<?php include 'includes/header.php';


$clientes = [
  'nombre' => 'Kipi',
  'saldo' => 200,
  'informacion' => [
    'tipo' => 'premium',
    'vip' => true
  ]
];

$clientes['apellido']="armen";

echo "<pre>";
var_dump($clientes);  
echo "</pre>";
echo "<pre>";
var_dump($clientes['informacion']);  
echo "</pre>";

echo $clientes['informacion']['tipo'];


include 'includes/footer.php';