<?php include 'includes/header.php';


$productos = [
  [
    'nombre' => 'Tablet',
    'precio' => 200,
    'disponible' => true
  ],
  [
    'nombre' => 'Television',
    'precio' => 500,
    'disponible' => true
  ],
  [
    'nombre' => 'Computadora',
    'precio' => 1000,
    'disponible' => true
  ],
  [
    'nombre' => 'Audifonos',
    'precio' => 100,
    'disponible' => false
  ]
];

echo '<pre>';
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump($json);
$json_array = json_decode($json);
var_dump($json_array);
echo '</pre>';

include 'includes/footer.php';